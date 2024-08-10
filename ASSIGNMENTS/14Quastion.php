<?php

// 14) Declare a Multi Dimensioned array of floats called balances having Three rows and five columns.


// Declare a multidimensional array of floats
$balances = array(
    array(1.2, 2.3, 3.4, 4.5, 5.6),
    array(6.7, 7.8, 8.9, 9.1, 10.2),
    array(11.3, 12.4, 13.5, 14.6, 15.7)
);


// Output the multidimensional array

echo "Multidimensional Array: </br></br>";
foreach ($balances as $row) {
    foreach ($row as $value) {
        echo "$value " . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "</br>";
}

?>
