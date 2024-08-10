<?php

// 11) Get random values from array.


// Get random Single Value:
$colors = array('Red', 'Green', 'Blue', 'Yellow', 'Orange');

// Get a random key from the array
$randomKey = array_rand($colors);

// Get the corresponding value using the random key
$randomColor = $colors[$randomKey];

echo "Get random Single Value: </br></br>";
echo "$randomColor </br>";


echo "</br></br></br></br>";



// Getting Multiple Random Values:
$colors = array('Red', 'Green', 'Blue', 'Yellow', 'Orange');

// Get three random keys from the array
$randomKeys = array_rand($colors, 3);


echo "Getting Multiple Random Values: </br></br>";

// Output the random colors
foreach ($randomKeys as $key) {
    echo $colors[$key] . " ";
}

?>
