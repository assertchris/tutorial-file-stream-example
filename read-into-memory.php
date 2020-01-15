<?php

require __DIR__ . "/helpers.php";

// read the file into memory
$data = file_get_contents(DOWNLOAD_URL);

// write the memory data to a local file
file_put_contents(LOCAL_FILE, $data);

print getMemoryUsed() . " used while reading into memory\n";
