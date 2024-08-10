<?php

trait A
{
    function f1()
    {
        echo "f1<br>";

    }
}
class B
{ 
    function f2()
    {
        echo "f2<br>";
        
    }
}
class C extends B
{
    use A;

}

$obj = new C;
$obj->f1();
$obj->f2();
