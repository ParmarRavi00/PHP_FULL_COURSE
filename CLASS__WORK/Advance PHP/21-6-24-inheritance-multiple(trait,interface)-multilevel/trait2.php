<?php 

trait A 
{
    function f1()
    {
        echo "f1<br>";
    }
}

trait B 
{
    use A;
    function f2()
    {
        echo "f2<br>";
    }
}

class C 
{
    use B;

    
}

$ob1 = new C;

$ob1->f2();
$ob1->f1();