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
    function f2()
    {
        echo "f2<br>";
        
    }
}
class C 
{
    use A,B;

}

$obj = new C;
$obj->f1();
$obj->f2();