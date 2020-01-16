<?php

require __DIR__ . "/helpers.php";

use GuzzleHttp\Client;

$client = new Client();

// get remote file stream
$source = fopen(DOWNLOAD_URL, 'r');

// get local file stream
$destination = fopen(LOCAL_FILE, 'w+');

// copy from the remote file stream to the local file stream
stream_copy_to_stream($source, $destination);

print getMemoryUsed() . " used while streaming source to destination\n";
