<?php 

function getX()
{
    $x=1;
    static $y=1;

    echo $x." ".$y."<br>";
    $x++;//2
    $y++;//2
}

getX();
getX();
getX();
getX();
getX();