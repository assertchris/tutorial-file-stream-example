<?php

require __DIR__ . '/vendor/autoload.php';

define('DOWNLOAD_URL', 'https://github.com/assertchris/uploads/raw/master/rick.mp3');
define('LOCAL_FILE', __DIR__ . "/rick.mp3");

function getNiceFileSize($bytes) {
    $unit= ['B','KB','MB','GB','TB','PiB'];

    if ($bytes==0) {
        return '0' . $unit[0];
    }

    return round($bytes / pow(1024, ($i = floor(log($bytes,1024)))), 2) . (isset($unit[$i]) ? $unit[$i] : 'B');
}

function getMemoryUsed() {
    return getNiceFileSize(memory_get_peak_usage(true));
}
