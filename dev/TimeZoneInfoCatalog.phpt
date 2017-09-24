<?php echo '<' . '?php'; ?>

declare(strict_types = 1);

namespace Dagr\Tzdb;

final class Catalog
{
    public const LINKS = [
<?php
foreach ($catalog['links'] as $from => $to) {
    echo str_repeat(' ', 2 * 4) . "'" . strtolower($from) . "' => '" . strtolower($to) . "',\n";
}
?>
    ];
    public const ZONES = [
<?php
foreach ($catalog['zones'] as $id => $fqcn) {
    echo str_repeat(' ', 2 * 4);
    echo "'" . strtolower($id) . "' => " . str_replace('Dagr\\Tzdb\\', '', $fqcn) . "::class,\n";
}
?>
    ];
}
