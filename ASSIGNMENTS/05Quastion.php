<?php

// 5) Write a program to find whether a number is Armstrong or not Write a program to print the below format :
// 59
// 2610
// 3711
// 4812


// Function to check if a number is Armstrong
function isArmstrong($number) {
    // Count number of digits in $number
    $numDigits = strlen((string)$number);

    // Initialize sum
    $sum = 0;
    $temp = $number;

    // Calculate sum of nth power of each digit
    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = intval($temp / 10);
    }

    // Check if $number is Armstrong
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}


// Example number to check
$number = 59;

// Check if the number is Armstrong
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.\n";
} else {
    echo "$number is not an Armstrong number.\n";
}
echo "</br>";

// Example number to check
$number = 2610;

// Check if the number is Armstrong
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.\n";
} else {
    echo "$number is not an Armstrong number.\n";
}
echo "</br>";


// Example number to check
$number = 3711;

// Check if the number is Armstrong
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.\n";
} else {
    echo "$number is not an Armstrong number.\n";
}
echo "</br>";


// Example number to check
$number = 4812;

// Check if the number is Armstrong
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.\n";
} else {
    echo "$number is not an Armstrong number.\n";
}


?>