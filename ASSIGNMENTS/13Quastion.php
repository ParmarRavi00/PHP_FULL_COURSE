<?php

// 13) Use a for loop to total the contents of an integer array called numbers which has five elements. Store the result in an integer called total.


// Initialize the integer array
$numbers = array(10, 20, 30, 40, 50);

print_r($numbers);
echo "</br></br>";

// Initialize total to zero
$total = 0;

// Loop through each element of the array and add it to total
for ($i = 0; $i < count($numbers); $i++) {
    $total += $numbers[$i];
}

// Output the total
echo "Total of numbers array: $total";

?>
