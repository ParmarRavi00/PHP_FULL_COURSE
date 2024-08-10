<?php

// 8) How can you tell if a number is even or odd without using any Condition or loop?


$number = 12;

// Determine if the number is even or odd without using condition or loop
$isEven = ($number % 2 == 0);

// Output the result
if ($isEven) {
    echo "$number is even.\n";
} else {
    echo "$number is odd.\n";
}

?>
