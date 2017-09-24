<?php
declare(strict_types = 1);

require_once __DIR__ . '/../vendor/autoload.php';

$path = sys_get_temp_dir() . '/dagr-tzdb';

$files = [
    'africa',
    'antarctica',
    'asia',
    'australasia',
    'europe',
    'northamerica',
    'pacificnew',
    'southamerica',
    'backward',
    'etcetera',
];

$parser = new Dagr\Tzdb\Dev\TzFileParser();
$compiler = new Dagr\Tzdb\Dev\TzCompiler($parser);
$catalog = [];

foreach ($files as $file) {
    $catalog = array_merge_recursive($catalog, $compiler->compile(new SplFileObject($path . '/' . $file)));
}

$catalogCompiler = new Dagr\Tzdb\Dev\CatalogCompiler();
$catalogCompiler->compile($catalog);
