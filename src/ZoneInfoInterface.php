<?php
declare(strict_types = 1);

namespace Dagr\Tzdb;

interface ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [];
    public const STANDARD_OFFSETS = [];
    public const SAVINGS_INSTANT_TRANSITIONS = [];
    public const WALL_OFFSETS = [];
    public const LAST_RULES = [];
}
