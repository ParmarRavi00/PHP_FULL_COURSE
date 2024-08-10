<?php 

class Test 
{
    public function fun1()
    {
        echo "fun1<br>";
    }
    public function fun2($x)
    {
        echo $x."<br>";
    }
    // public function __construct()
    // {
    //     echo "Constructor Function ..!<br>";
    // }

    public function __construct($y)
    {
        echo "Constructor Function ..! $y <br>";
    }

    public function __destruct()
    {
        echo "destructor<br>";
    }
}
$obj1 = new Test(1);
$obj2 = new Test(2);
$obj3 = new Test(3);
$obj1->fun1();
$obj2->fun2(12);