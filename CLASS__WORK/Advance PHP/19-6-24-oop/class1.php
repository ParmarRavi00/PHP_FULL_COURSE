<?php 

class Test 
{
    public $x=11;
    private $y=12;
    protected $z=13;
    static $a=23;
}

$ob = new Test;
echo $ob->x;
// echo $ob->y;
// echo Test::$y;
// echo $ob->z;
echo Test::$a;