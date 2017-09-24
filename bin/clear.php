<?php
declare(strict_types = 1);

$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator(__DIR__ . '/../src/Zone', RecursiveDirectoryIterator::SKIP_DOTS),
    RecursiveIteratorIterator::CHILD_FIRST
);

foreach ($files as $fileInfo) {
    if ($fileInfo->isDir()) {
        rmdir($fileInfo->getRealPath());
        continue;
    }

    unlink($fileInfo->getRealPath());
}

@unlink(__DIR__ . '/../src/Catalog.php');
