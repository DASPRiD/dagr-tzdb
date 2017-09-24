<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Dev\Zone;

use DomainException;

final class ZoneRulesBuilder
{
    /**
     * @var TzWindow[]
     */
    private $tzWindows = [];

    public function addWindow(int $zoneOffset, LocalDateTime $windowEnd, TimeDefinition $timeDefinition) : void
    {
        $tzWindow = new TzWindow($zoneOffset, $windowEnd, $timeDefinition);

        if (!empty($this->tzWindows)) {
            $lastTzWindow = end($this->tzWindows);
            $tzWindow->validateWindowOrder($lastTzWindow);
        }

        $this->tzWindows[] = $tzWindow;
    }

    public function addWindowForever(int $zoneOffset) : void
    {
        $this->addWindow($zoneOffset, LocalDateTime::max(), TimeDefinition::wall());
    }

    public function setFixedSavingsToWindow(int $seconds) : void
    {
        if (empty($this->tzWindows)) {
            throw new DomainException('Must add a window before setting the fixed savings');
        }

        $lastTzWindow = end($this->tzWindows);
        $lastTzWindow->setFixedSavings($seconds);
    }

    public function addRuleToWindow(
        int $startYear,
        int $endYear,
        int $month,
        int $dayOfMonth,
        int $dayOfWeek,
        LocalTime $time,
        bool $timeEndOfDay,
        TimeDefinition $timeDefinition,
        int $savingAmountSeconds
    ) : void {
        if ($dayOfMonth < -28 || $dayOfMonth > 31 || 0 === $dayOfMonth) {
            throw new DomainException('Day of month indicator must be between -28 and 31 inclusive excluding zero');
        }

        if ($timeEndOfDay && !$time->equals(LocalTime::midnight())) {
            throw new DomainException('Time must be midnight when end of day flag is true');
        }

        if (empty($this->tzWindows)) {
            throw new DomainException('Must add a window before adding a rule');
        }

        $tzWindow = end($this->tzWindows);
        $tzWindow->addRule(
            $startYear,
            $endYear,
            $month,
            $dayOfMonth,
            $dayOfWeek,
            $time,
            $timeEndOfDay,
            $timeDefinition,
            $savingAmountSeconds
        );
    }

    public function build() : ZoneRules
    {
        $standardTransitions = [];
        $savingsInstantTransitions = [];
        $lastRules = [];

        if (empty($this->tzWindows)) {
            throw new DomainException('No windows have been added to the builder');
        }

        $firstTzWindow = $this->tzWindows[0];
        $zoneOffset = $firstTzWindow->getStandardOffset();
        $savingsSecondsBefore = $firstTzWindow->getFixedSavingAmountSeconds() ?: 0;
        $firstZoneSavingsOffset = $zoneOffset + $savingsSecondsBefore;
        $zoneSavingsOffsetBefore = $firstZoneSavingsOffset;
        $localDateTime = LocalDateTime::min();

        foreach ($this->tzWindows as $tzWindow) {
            $tzWindow->tidy($localDateTime->getYear());
            $newSavingSecondsBefore = $tzWindow->getFixedSavingAmountSeconds();

            if (null === $newSavingSecondsBefore) {
                $newSavingSecondsBefore = 0;

                foreach ($tzWindow->getRules() as $rule) {
                    if ($rule->toEpochSecond($zoneOffset, $savingsSecondsBefore)
                        > $localDateTime->toEpochSeconds($zoneSavingsOffsetBefore)
                    ) {
                        break;
                    }

                    $newSavingSecondsBefore = $rule->getSavingAmountSeconds();
                }
            }

            if ($zoneOffset !== $tzWindow->getStandardOffset()) {
                $standardTransitions[] = new ZoneOffsetTransition(
                    LocalDateTime::ofEpochSecond(
                        $localDateTime->toEpochSeconds($zoneSavingsOffsetBefore),
                        $zoneOffset
                    ),
                    $zoneOffset,
                    $tzWindow->getStandardOffset()
                );
                $zoneOffset = $tzWindow->getStandardOffset();
            }

            if ($zoneSavingsOffsetBefore !== ($zoneOffset + $newSavingSecondsBefore)) {
                $savingsInstantTransitions[] = new ZoneOffsetTransition(
                    $localDateTime,
                    $zoneSavingsOffsetBefore,
                    $zoneOffset + $newSavingSecondsBefore
                );
            }

            $savingsSecondsBefore = $newSavingSecondsBefore;

            foreach ($tzWindow->getRules() as $rule) {
                if (!$rule->isTransition($savingsSecondsBefore)) {
                    continue;
                }

                $zoneOffsetTransition = $rule->toTransition($zoneOffset, $savingsSecondsBefore);

                if ($zoneOffsetTransition->toEpochSecond() < $localDateTime->toEpochSeconds($zoneSavingsOffsetBefore)
                    || $zoneOffsetTransition->toEpochSecond()
                    >= $tzWindow->createDateTimeEpochSecond($savingsSecondsBefore)
                ) {
                    continue;
                }

                $savingsInstantTransitions[] = $zoneOffsetTransition;
                $savingsSecondsBefore = $rule->getSavingAmountSeconds();
            }

            foreach ($tzWindow->getLastRules() as $lastRule) {
                $lastRules[] = $lastRule->toTransitionRule($zoneOffset, $savingsSecondsBefore);
                $savingsSecondsBefore = $lastRule->getSavingAmountSeconds();
            }

            $zoneSavingsOffsetBefore = $tzWindow->createWallOffset($savingsSecondsBefore);
            $localDateTime = LocalDateTime::ofEpochSecond(
                $tzWindow->createDateTimeEpochSecond($savingsSecondsBefore),
                $zoneSavingsOffsetBefore
            );
        }

        return new ZoneRules(
            $firstTzWindow->getStandardOffset(),
            $firstZoneSavingsOffset,
            $standardTransitions,
            $savingsInstantTransitions,
            $lastRules
        );
    }
}
