<?php 

$arr = array ("music","internet","games");

// implode("seperator",array);

// seperator: space, "," ,"+"

// echo $arr;// array to string conversion

$str1 = implode(',',$arr);// array to string 

echo $str1."<br>";

$str = "hello how are you?<br>";

echo $str;

// explode('seperator',string)

$arr1 = explode(',',$str);//string to array

// echo $arr1[0];

foreach($arr1 as $a)
{
    echo $a."<br>";
}




