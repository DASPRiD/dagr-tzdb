<?php
/* @var $zoneRules Dagr\Tzdb\Dev\Zone\ZoneRules */
echo '<' . '?php';
?>

declare(strict_types = 1);

namespace <?php echo $namespace; ?>;

use Dagr\Tzdb\ZoneInfoInterface;

final class <?php echo $className; ?> implements ZoneInfoInterface
{
    public const STANDARD_TRANSITIONS = [
<?php
foreach ($zoneRules->getStandardTransitions() as $value) {
    echo str_repeat(' ', 2 * 4) . $value . ",\n";
}
?>
    ];
    public const STANDARD_OFFSETS = [
<?php
foreach ($zoneRules->getStandardOffsets() as $value) {
    echo str_repeat(' ', 2 * 4) . $value . ",\n";
}
?>
    ];
    public const SAVINGS_INSTANT_TRANSITIONS = [
<?php
foreach ($zoneRules->getSavingsInstantTransitions() as $value) {
    echo str_repeat(' ', 2 * 4) . $value . ",\n";
}
?>
    ];
    public const WALL_OFFSETS = [
<?php
foreach ($zoneRules->getWallOffsets() as $value) {
    echo str_repeat(' ', 2 * 4) . $value . ",\n";
}
?>
    ];
    public const LAST_RULES = [
<?php
foreach ($zoneRules->getLastRules() as $rule) {
    echo str_repeat(' ', 2 * 4) . "[\n";
    echo str_repeat(' ', 3 * 4) . "'month' => " . $rule->getMonth() . ",\n";
    echo str_repeat(' ', 3 * 4) . "'dayOfMonth' => " . $rule->getDayOfMonth() . ",\n";
    echo str_repeat(' ', 3 * 4) . "'dayOfWeek' => " . $rule->getDayOfWeek() . ",\n";
    echo str_repeat(' ', 3 * 4) . "'time' => " . $rule->getTime()->toSecondOfDay() . ",\n";
    echo str_repeat(' ', 3 * 4) . "'timeEndOfDay' => " . ($rule->isTimeEndOfDay() ? 'true' : 'false') . ",\n";
    echo str_repeat(' ', 3 * 4) . "'standardOffset' => " . $rule->getStandardOffset() . ",\n";
    echo str_repeat(' ', 3 * 4) . "'offsetBefore' => " . $rule->getOffsetBefore() . ",\n";
    echo str_repeat(' ', 3 * 4) . "'offsetAfter' => " . $rule->getOffsetAfter() . ",\n";
    echo str_repeat(' ', 2 * 4) . "],\n";
}
?>
    ];
}
