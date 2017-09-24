<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Dev;

use Dagr\Tzdb\Dev\Zone\LocalDate;
use Dagr\Tzdb\Dev\Zone\LocalDateTime;
use Dagr\Tzdb\Dev\Zone\LocalTime;
use Dagr\Tzdb\Dev\Zone\TimeDefinition;
use Dagr\Tzdb\Dev\Zone\ZoneRules;
use Dagr\Tzdb\Dev\Zone\ZoneRulesBuilder;
use SplFileObject;

final class TzCompiler
{
    /**
     * @var TzFileParser
     */
    private $parser;

    public function __construct(TzFileParser $parser)
    {
        $this->parser = $parser;
    }

    public function compile(SplFileObject $file) : array
    {
        $data = $this->parser->parseFile($file);
        $result = [
            'zones' => [],
            'links' => $data['links'],
        ];

        foreach ($data['zones'] as $zoneId => $windows) {
            $zoneRuleBuilder = new ZoneRulesBuilder();

            foreach ($windows as $window) {
                if ($window['hasUntil']) {
                    $zoneRuleBuilder->addWindow(
                        $window['gmtOffset'],
                        new LocalDateTime(
                            new LocalDate(
                                $window['lowYear'],
                                $window['month'],
                                $window['dayOfMonth']
                            ),
                            LocalTime::ofSecondOfDay($window['timeOfDay'])
                        ),
                        $this->getTimeDefinition($window['timeDefinition'])
                    );
                } else {
                    $zoneRuleBuilder->addWindowForever($window['gmtOffset']);
                }

                if ('-' === $window['rule']) {
                    $zoneRuleBuilder->setFixedSavingsToWindow(0);
                    continue;
                } elseif (is_int($window['rule'])) {
                    $zoneRuleBuilder->setFixedSavingsToWindow($window['rule']);
                    continue;
                }

                foreach ($data['rules'][$window['rule']] as &$rule) {
                    $rule['adjustForwards'] = 'dowleq' !== $rule['dayCode'];
                    $this->adjustToForwards($rule, 2004);

                    $zoneRuleBuilder->addRuleToWindow(
                        $rule['lowYear'],
                        $rule['highYear'],
                        $rule['month'],
                        $rule['dayOfMonth'],
                        $rule['dayOfWeek'],
                        86400 === $rule['timeOfDay'] ? LocalTime::midnight() : LocalTime::ofSecondOfDay(
                            $rule['timeOfDay']
                        ),
                        86400 === $rule['timeOfDay'],
                        $this->getTimeDefinition($rule['timeDefinition']),
                        $rule['standardOffset']
                    );
                }
            }

            $fullyQualifiedClassName = $this->getFullyQualifiedClassName($zoneId);
            $parts = explode('\\', $fullyQualifiedClassName);
            $className = array_pop($parts);
            $namespace = implode('\\', $parts);

            $zoneRules = $zoneRuleBuilder->build();
            $phpCode = $this->renderFile($zoneRules, $namespace, $className);

            $path = __DIR__ . '/../src/' . str_replace('\\', '/', str_replace('Dagr\\Tzdb', '', $namespace));
            @mkdir($path, 0755, true);
            file_put_contents($path . '/' . $className . '.php', $phpCode);

            $result['zones'][$zoneId] = $fullyQualifiedClassName;
        }

        return $result;
    }

    private function getFullyQualifiedClassName(string $zoneId) : string
    {
        return 'Dagr\\Tzdb\\Zone\\' . strtr($zoneId, [
            '_' => '',
            '-' => 'Minus',
            '+' => 'Plus',
            '/' => '\\',
        ]);
    }

    private function renderFile(ZoneRules $zoneRules, string $namespace, string $className) : string
    {
        ob_start();
        require __DIR__ . '/TimeZoneInfo.phpt';
        return ob_get_clean();
    }

    private function adjustToForwards(array &$rule, int $year) : void
    {
        if ($rule['adjustForwards'] || $rule['dayOfMonth'] <= 0) {
            return;
        }

        $localDate = (new LocalDate($year, $rule['month'], $rule['dayOfMonth']))->minusDays(6);
        $rule['dayOfMonth'] = $localDate->getDayOfMonth();
        $rule['month'] = $localDate->getMonth();
        $rule['adjustForwards'] = true;
    }

    private function getTimeDefinition(string $string) : TimeDefinition
    {
        switch ($string) {
            case 'standard':
                return TimeDefinition::standard();

            case 'wall':
                return TimeDefinition::wall();
        }

        return TimeDefinition::utc();
    }
}
