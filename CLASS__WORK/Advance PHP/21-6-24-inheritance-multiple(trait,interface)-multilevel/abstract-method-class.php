<?php 

abstract class Test 
{
    abstract function t1();// abstract function/method (method without body)

    function test123()
    {
        echo "test123<br>";
    }
    
}

class child1 extends Test
{
    function t1()
    {
        echo "abs t1<br>";
    }
}
class child2 extends Test
{
    function t1()
    {
        echo "abs123 t1<br>";
    }
}

$ob = new child1;
$ob1 = new child2;

$ob->t1();
$ob1->t1();
$ob->test123();
$ob1->test123();

