<?php 

interface Test1 
{
     function t1();
     
   
}
interface Test2
{
    function t2();
}
class Test3
{
    function t3()
    {
        echo "t3<br>";
    }
}

Trait Ex1 
{
    function tr1()
    {
        echo "tr1<br>";
    }
}

Trait Ex2 
{
    function tr2()
    {
        echo "tr2<br>";
    }
}
Trait Ex3 
{
    use Ex2;
    function tr3()
    {
        echo "tr3<br>";
    }
}

interface I1 
{
    function int1();
   
}

interface I2 extends I1
{
    function int2();
}
class Test4 extends Test3 implements Test1,Test2,I2
{

    function int1()
    {
        echo "int1<br>";
    }
    function int2()
    {
        echo "int2<br>";
    }
    use Ex1,Ex3;
    function t1()
    {
        echo "t1<br>";
    }

    function t2()
    {
        echo "t2<br>";
    }
    function t4()
    {
        echo "t4<br>";
    }
}

class Ravi implements I2
{
    function int1()
    {
        echo "diff body1<br>";
    }    function int2()
    {
        echo "diff body2<br>";
    }
}

$ob = new Test4;
$obj1= new Ravi;
$obj1->int1();
$obj1->int2();
$ob->t4();
$ob->t1();
$ob->t2();
$ob->t3();
$ob->tr1();
$ob->tr2();
$ob->tr3();
$ob->int1();
$ob->int2();