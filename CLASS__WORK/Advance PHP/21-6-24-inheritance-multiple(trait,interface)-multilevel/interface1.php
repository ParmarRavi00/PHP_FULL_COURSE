<?php


interface i1 
{
    function t1();
}

interface i2 
{
    function t3();
}

class c1 
{
    function t2()
    {
        echo "t2<br>";
    }
}

class c2 extends c1 implements i1,i2
{

    function t1()
    {
        echo "213<br>";
    }
    function t3()
    {
        echo "t3<br>";
    }
}

$obj1 = new c2;
$obj1->t1();
$obj1->t2();
$obj1->t3();