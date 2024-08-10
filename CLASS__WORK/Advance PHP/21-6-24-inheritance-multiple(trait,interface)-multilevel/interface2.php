<?php 

interface i1 
{
    function t1();
}

interface i2 extends i1 
{
    function t2();
    
}

class Test implements i2
{
    function t1()
    {
        echo "t1<br>";
    }

    function t2()
    {
        echo "t2<br>";
    }
}

$t = new Test;
$t->t1();
$t->t2();