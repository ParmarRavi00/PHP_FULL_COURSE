<?php 

class Parent1 
{
    public function test1()
    {
        echo "t1<br>";
    }

    static function test()
    {
        echo "static <br>";
    }

}

$xyz = new Parent1;
$xyz::test();
class Child1 extends Parent1
{
    
}
class Child2 extends Parent1
{
   
}

$ob =  new Child1;
$obj = new Child2;
$ob->test1();
$obj->test1();

class Base 
{
    final function test()
    {
        echo "testXYZ<br>";
    }
}

class Derived extends Base
{
    function test1()
    {
        echo "test1<br>";
    }

    function test($x,$y)
    {
        echo "this is another test methos in CHILD<br>";
    }
}

$ob =new Derived;
$ob->test1();
$ob->test();
