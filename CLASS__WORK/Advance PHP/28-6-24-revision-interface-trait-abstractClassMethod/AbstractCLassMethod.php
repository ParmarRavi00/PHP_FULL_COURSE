<?php 

abstract class Test // abstract class
{
    abstract function fun1();  // abstract method 

    function fun2()
    {
        echo "123<br>";
    }
}

class Child extends Test 
{
    function fun1()
    {
        echo "Abstract Function <br>";
    }

}
$obj = new Child;
$obj->fun1();
$obj->fun2();