<?php

// 12) Write a PHP script which decodes the following JSON string.


$jsonString = '{"name": "John", "age": 30, "city": "New York"}';

// Decode JSON string to PHP array
$arrayFromJson = json_decode($jsonString, true);

    // Output the decoded array
    echo "Decoded JSON: </br>";
    print_r($arrayFromJson);

?>
