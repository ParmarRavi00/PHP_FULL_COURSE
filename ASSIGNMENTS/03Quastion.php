<?php

// 3) Write a PHP program to find the largest of three numbers using ternary Operator.

// Function to find the largest of three numbers using ternary operator
function findLargest($a, $b, $c) {
    $largest = ($a >= $b && $a >= $c) ? $a : (($b >= $a && $b >= $c) ? $b : $c);
    return $largest;
}

// Example numbers (you can modify these values)
$num1 = 25;
$num2 = 67;
$num3 = 12;

// Find the largest number
$largestNumber = findLargest($num1, $num2, $num3);

// Output the result
echo "The largest number among $num1, $num2, and $num3 is: $largestNumber\n";

?>
