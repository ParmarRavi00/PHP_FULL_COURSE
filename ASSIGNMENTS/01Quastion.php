<?php

// 1) Write a PHP program to enter marks of five subjects Physics, Chemistry,
// Biology, Mathematics and Computer, calculate percentage and grade by if
// else write a PHP program for find „Thursday‟ in week using switch
// Function.


// Function to calculate percentage

echo "First Program: </br></br>";

function calculatePercentage($physics, $chemistry, $biology, $mathematics, $computer) {
    $totalMarks = $physics + $chemistry + $biology + $mathematics + $computer;
    $percentage = ($totalMarks / 500) * 100;
    return $percentage;
}

// Function to determine grade based on percentage
function calculateGrade($percentage) {
    if ($percentage >= 90) {
        return 'A';
    } elseif ($percentage >= 80) {
        return 'B';
    } elseif ($percentage >= 70) {
        return 'C';
    } elseif ($percentage >= 60) {
        return 'D';
    } elseif ($percentage >= 40) {
        return 'E';
    } else {
        return 'F';
    }
}

// Example marks (you can modify these values)
$physics = 85;
$chemistry = 90;
$biology = 78;
$mathematics = 92;
$computer = 88;

// Calculate percentage
$percentage = calculatePercentage($physics, $chemistry, $biology, $mathematics, $computer);

// Calculate grade
$grade = calculateGrade($percentage);

// Output the results
echo "Physics Marks: $physics </br>";
echo "Chemistry Marks: $chemistry </br>";
echo "Biology Marks: $biology </br>";
echo "Mathematics Marks: $mathematics </br>";
echo "Computer Marks: $computer </br>";
echo "-------------------------------- </br>";
echo "Percentage: " . number_format($percentage, 2) . "% </br>";
echo "Grade: $grade </br></br></br></br>";


// -----------------------------------------------------------------------


// Function to find the day of the week using switch

echo "Second Program: </br></br>";

function findThursdayInWeek($day) {
    switch ($day) {
        case 1:
            return "Monday";
        case 2:
            return "Tuesday";
        case 3:
            return "Wednesday";
        case 4:
            return "Thursday";
        case 5:
            return "Friday";
        case 6:
            return "Saturday";
        case 7:
            return "Sunday";
        default:
            return "Invalid day number";
    }
}

// Example day number (1 for Monday, 2 for Tuesday, ..., 7 for Sunday)
$dayNumber = 4; // 4 represents Thursday

// Find the day corresponding to the day number
$dayName = findThursdayInWeek($dayNumber);

// Output the result
echo "Day $dayNumber is $dayName\n";


?>
