<?php

// 10) Write program to remove duplicate values from array.


$array = array(1, 2, 2, 3, 4, 4, 5);

// Remove duplicates
$uniqueArray = array_unique($array);

// Output the unique array
echo "Original Array: ";
print_r($array);
echo "</br></br>";

echo "Array after removing duplicates: ";
print_r($uniqueArray);
?>
