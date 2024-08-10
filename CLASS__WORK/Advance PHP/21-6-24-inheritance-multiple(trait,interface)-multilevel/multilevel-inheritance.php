<?php

class Father 
{
    function fatherFun()
    {
        echo "fun1<br>";
    }

}

class Mother extends Father
{
    function motherFun()
    {
        echo "fun2<br>";
    }

}
class Son extends Mother
{
    function sonFun()
    {
        echo "fun3<br>";
    }
}

class Daughter extends Mother 
{

}


$ob = new Son;
$ob1 = new Daughter;
$ob->sonFun();
$ob->motherFun();
$ob->fatherFun();
$ob1->motherFun();
$ob1->fatherFun();





