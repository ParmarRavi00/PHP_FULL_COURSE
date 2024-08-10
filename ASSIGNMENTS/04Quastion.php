<?php

// 4) Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21, 34...


// Function to generate and print Fibonacci series up to a certain number of terms
function fibonacciSeries($numTerms) {
    $num1 = 0;
    $num2 = 1;
    $count = 0;

    // Handle edge case for 0th term
    if ($numTerms == 0) {
        echo "Fibonacci series up to 0 terms: </br>";
        return;
    }

    // Print the first two terms (0 and 1)
    echo "Fibonacci series up to $numTerms terms: </br>";
    echo "$num1, ";
    if ($numTerms > 1) {
        echo "$num2, "; // 0 1
    }

    // Generate the Fibonacci sequence
    while ($count < $numTerms - 2) {
        $next = $num1 + $num2;
        echo "$next, "; // 1 2 3 5 8 13 21 34 
        $num1 = $num2;
        $num2 = $next;
        $count++;
    }

    // Print the last term without a trailing comma
    $next = $num1 + $num2;
    echo "$next"; // 55
}

// Number of terms in the Fibonacci series to generate
$numTerms = 10; // Change this value to generate different number of terms

// Generate and print the Fibonacci series
fibonacciSeries($numTerms);

?>
