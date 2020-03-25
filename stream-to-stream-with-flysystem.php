<?php

require __DIR__ . "/helpers.php";

use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;

$filesystem = new Filesystem(new Local(__DIR__));

// get remote file stream
$source = fopen(DOWNLOAD_URL, 'r');

// copy from source stream to local file (over stream)
$filesystem->putStream('rick.mp3', $source);

print getMemoryUsed() . " used while streaming source to destination with flysystem\n";
