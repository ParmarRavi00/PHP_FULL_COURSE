<?php 

$x=1;//global 
$y="hi123";

echo var_dump($y)."<br>";

echo $x.$y."<br>";
 if($x)
 {
    echo $x.$y."<br>";
 }
 function test()
 {
    // global $x;
    // echo $x;
    global $y;

    // echo $GLOBALS['x'].$y;
    echo $GLOBALS['x'].$GLOBALS['y']."<br>";
 }
 test();
 test();
 test();
 test();

