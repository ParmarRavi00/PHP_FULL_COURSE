<?php 

Trait Test1 
{
    function t1()
    {
        echo "t1<br>";
    }
}

Trait Test2
{
    function t2()
    {
        echo "t2<br>";
    }
}

class Test4 
{
    function t4()
    {
        echo "t4<br>";
    }
}


class Test3 extends Test4
{

    use Test1,Test2;
    function t3()
    {
        echo "t3<br>";
    }
}

$ob = new Test3;
$ob->t3();
$ob->t2();
$ob->t1();
$ob->t4();