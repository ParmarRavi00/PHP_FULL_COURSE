<?php 

class Test 
{
    static $x=12;

    static function f1()
    {
       
        echo Test::$x;
    }

    static function f2()
    {
        echo "<br>static fun f2<br>";
        Test::f1();
    }
}

$ob = new Test;
$ob->f1();
$ob->f2();
Test::f2();

