<?php
declare(strict_types = 1);

namespace Dagr\Tzdb;

final class Provider
{
    /**
     * Looks the given zone ID up in the catalog and returns the zone info.
     */
    public static function provideZone(string $zoneId) : ?ZoneInfoInterface
    {
        $zoneId = strtolower($zoneId);

        if (array_key_exists($zoneId, Catalog::LINKS)) {
            $zoneId = Catalog::LINKS[$zoneId];
        }

        if (!array_key_exists($zoneId, Catalog::ZONES)) {
            return null;
        }

        $className = Catalog::ZONES[$zoneId];
        return new $className();
    }
}
