<?php 
//call by value
function test($str)//hello
{
    $str = $str."123";//hello 123
}

$str1 = "hello";
test($str1);//hello

echo $str1."<br>";

//call by reference
function test1(&$str)//hello
{
    $str = $str."123";//hello 123
}

$str1 = "hello";
test1($str1);//hello

echo $str1;