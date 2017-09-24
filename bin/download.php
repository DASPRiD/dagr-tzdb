<?php
declare(strict_types = 1);

$path = sys_get_temp_dir() . '/dagr-tzdb';

file_put_contents($path . '.tar.gz', file_get_contents('ftp://ftp.iana.org/tz/tzdata-latest.tar.gz'));
$archive = new PharData($path . '.tar.gz');
$archive->extractTo($path, null, true);




