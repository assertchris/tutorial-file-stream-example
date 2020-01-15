<?php

require __DIR__ . "/helpers.php";

use GuzzleHttp\Client;

$client = new Client();

// read the file into memory with guzzle
$response = $client->request('GET', DOWNLOAD_URL);

// write the memory data to a local file
file_put_contents(LOCAL_FILE, $response->getBody());

print getMemoryUsed() . " used while reading into memory with guzzle\n";
