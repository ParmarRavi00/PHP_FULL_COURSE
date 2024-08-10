<?php

// 2) Write a PHP program to check Leap years between 1901 to 2016 Using nested if.

// Function to check if a year is a leap year
function isLeapYear($year) {
    if ($year % 4 == 0) {
        return true;
    } else {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}

// Loop to check leap years from 1901 to 2016
echo "Leap years between 1901 and 2016: </br></br>";

for ($year = 1901; $year <= 2016; $year++) {
    if (isLeapYear($year)) {
        echo "$year </br>";
    }
}

?>
