<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Dev\Zone;

final class TimeDefinition
{
    /**
     * @var string
     */
    private $type;

    private function __construct(string $type)
    {
        $this->type = $type;
    }

    public static function utc() : self
    {
        return new self('utc');
    }

    public static function wall() : self
    {
        return new self('wall');
    }

    public static function standard() : self
    {
        return new self('standard');
    }

    public function createDateTime(LocalDateTime $localDateTime, int $zoneOffset, int $zoneOffset2) : LocalDateTime
    {
        switch ($this->type) {
            case 'utc':
                return $localDateTime->plusSeconds($zoneOffset2);

            case 'standard':
                return $localDateTime->plusSeconds($zoneOffset2 - $zoneOffset);
        }

        return $localDateTime;
    }
}
