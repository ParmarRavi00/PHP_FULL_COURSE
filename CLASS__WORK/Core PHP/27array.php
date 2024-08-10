<?php 

//indexed Array (index starts with ZERO)
$arr =  array(12,45,56);


// foreach($arr as $k=>$v)
// {
//     echo $k." =>".$v."<br>";
// }

// foreach($arr as $v)
// {
//     echo $v."<br>";
// }

// Associative Array : 

$arr1 = array('rollNo'=>11,54=>12,"greet"=>"hi");

foreach($arr1 as $key=>$val)
{
    echo $key." => ".$val."<br>";
}


//multidimensional Array

$arr2 =  array(
    array(12,34,56), //00 01 02
    array(67,87,98), //10 11 12
    array(87,23,89)  //20 21 22
);


foreach($arr2 as $xyz)
{
    foreach($xyz as $x)
    {
        echo $x." ";
    }

    echo "<br>";
}


// for($row=0;$row<sizeof($arr2);$row++)
// {
//     for($col=0;$col<sizeof($arr2);$col++)
//     {
//         echo $arr2[$row][$col]." ";
//     }
//     echo "<br>";
// }

// echo $arr2[0][2];// $arr2[row][col]