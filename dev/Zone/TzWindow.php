<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Dev\Zone;

use DomainException;

final class TzWindow
{
    /**
     * @var int
     */
    private $standardOffset;

    /**
     * @var LocalDateTime
     */
    private $windowEnd;

    /**
     * @var TimeDefinition
     */
    private $timeDefinition;

    /**
     * @var int|null
     */
    private $fixedSavingAmountSeconds;

    /**
     * @var TzRule[]
     */
    private $rules = [];

    /**
     * @var int
     */
    private $maxLastRuleStartYear;

    /**
     * @var TzRule[]
     */
    private $lastRules = [];

    public function __construct(int $standardOffset, LocalDateTime $windowEnd, TimeDefinition $timeDefinition)
    {
        $this->standardOffset = $standardOffset;
        $this->windowEnd = $windowEnd;
        $this->timeDefinition = $timeDefinition;
    }

    public function validateWindowOrder(self $other) : void
    {
        if ($this->windowEnd->compareTo($other->windowEnd) < 0) {
            throw new DomainException('Windows must be added in date-time order');
        }
    }

    public function setFixedSavings(int $seconds) : void
    {
        if (!empty($this->rules) || !empty($this->lastRules)) {
            throw new DomainException('Window has DST rules, so cannot have fixed savings');
        }

        $this->fixedSavingAmountSeconds = $seconds;
    }

    public function addRule(
        int $startYear,
        int $endYear,
        int $month,
        int $dayOfMonthIndicator,
        int $dayOfWeek,
        LocalTime $time,
        bool $timeEndOfDay,
        TimeDefinition $timeDefinition,
        int $savingAmountSeconds
    ) : void {
        if (null !== $this->fixedSavingAmountSeconds) {
            throw new DomainException('Window has a fixed DST saving, so cannot have DST rules');
        }

        if (count($this->rules) >= 2000) {
            throw new DomainException('Window has reached the maximum number of allowed rules');
        }

        $forever = false;

        if (999999999 === $endYear) {
            $forever = true;
            $endYear = $startYear;
        }

        for ($year = $startYear; $year <= $endYear; ++$year) {
            $rule = new TzRule(
                $year,
                $month,
                $dayOfMonthIndicator,
                $dayOfWeek,
                $time,
                $timeEndOfDay,
                $timeDefinition,
                $savingAmountSeconds
            );

            if ($forever) {
                $this->lastRules[] = $rule;
                $this->maxLastRuleStartYear = max($year, $this->maxLastRuleStartYear);
                continue;
            }

            $this->rules[] = $rule;
        }
    }

    public function getStandardOffset() : int
    {
        return $this->standardOffset;
    }

    public function getFixedSavingAmountSeconds() : ?int
    {
        return $this->fixedSavingAmountSeconds;
    }

    /**
     * @return TzRule[]
     */
    public function getRules() : array
    {
        return $this->rules;
    }

    /**
     * @return TzRule[]
     */
    public function getLastRules() : array
    {
        return $this->lastRules;
    }

    public function createWallOffset(int $savingSeconds) : int
    {
        return $this->standardOffset + $savingSeconds;
    }

    public function createDateTimeEpochSecond(int $savingSecondsBefore) : int
    {
        $zoneOffset = $this->createWallOffset($savingSecondsBefore);
        $localDateTime = $this->timeDefinition->createDateTime($this->windowEnd, $this->standardOffset, $zoneOffset);
        return $localDateTime->toEpochSeconds($zoneOffset);
    }

    public function tidy(int $endYear) : void
    {
        if (1 === count($this->lastRules)) {
            throw new DomainException('Cannot have only one rule defined as being forever');
        }

        if ($this->windowEnd->equals(LocalDateTime::max())) {
            $this->maxLastRuleStartYear = max($this->maxLastRuleStartYear, $endYear) + 1;

            foreach ($this->lastRules as $rule) {
                $this->addRule(
                    $rule->getYear(),
                    $this->maxLastRuleStartYear,
                    $rule->getMonth(),
                    $rule->getDayOfMonthIndicator(),
                    $rule->getDayOfWeek(),
                    $rule->getTime(),
                    $rule->isTimeEndOfDay(),
                    $rule->getTimeDefinition(),
                    $rule->getSavingAmountSeconds()
                );
                $rule->setYear($this->maxLastRuleStartYear + 1);
            }

            if (999999999 === $this->maxLastRuleStartYear) {
                $this->lastRules = [];
            } else {
                ++$this->maxLastRuleStartYear;
            }
        } else {
            $year = $this->windowEnd->getYear();

            foreach ($this->lastRules as $rule) {
                $this->addRule(
                    $rule->getYear(),
                    $year + 1,
                    $rule->getMonth(),
                    $rule->getDayOfMonthIndicator(),
                    $rule->getDayOfWeek(),
                    $rule->getTime(),
                    $rule->isTimeEndOfDay(),
                    $rule->getTimeDefinition(),
                    $rule->getSavingAmountSeconds()
                );
            }

            $this->lastRules = [];
            $this->maxLastRuleStartYear = 999999999;
        }

        usort($this->rules, [TzRule::class, 'compare']);
        usort($this->lastRules, [TzRule::class, 'compare']);

        if (empty($this->rules) && null === $this->fixedSavingAmountSeconds) {
            $this->fixedSavingAmountSeconds = 0;
        }
    }
}
