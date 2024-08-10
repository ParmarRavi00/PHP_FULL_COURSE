<?php 

// Array : to store multuple values 
// Array Index always starts with 0
// Array length = total num of value stored 
// sizeof(varName)

// $var = array(val1,val2,...,"valN");

$arr = array(12,34,"hi");

print_r($arr)."<br>";

// "<pre>".print_r($arr) ."</pre>";

// echo $arr;

$arr1 = implode(',',$arr);
echo $arr1."<br>";

// foreach(var(arr) as $k=>$v)
// {
//     ..code;
// }

foreach($arr as $a)
{
    echo $a.","."<br>";//values
}
echo "<br>";

foreach($arr as $a=>$b)
{
    echo $a." => ".$b."<br>";//keys
}

// foreach($arr as $x=>$y)
// {
//     echo $y."<br>";
// }

// echo $arr;

// echo (sizeof($arr));//3(Array Length/size)

// echo $arr[0]."<br>";
// echo $arr[1]."<br>";
// echo $arr[2]."<br><br>";


// for($i=0;$i<sizeof($arr);$i++)
// {
//     echo $arr[$i]."<br>";
// }

// echo "<br>";
// $j=0;
// while($j<sizeof($arr))
// {
//     echo $arr[$j]."<br>";
//     $j++;
// }

// echo "<br>";
// $k=0;
// do
// {
//     echo $arr[$k]."<br>";
//     $k++;
// }while($k<sizeof($arr));

$fname = "raaviraj";
$lname ="parmar";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>

    <input type="text">
        <?php

        echo "sldfj<br>";
        print_r($arr);

        ?>
    </pre>

    <div>
        <h1>
            hello
            <p>
                <?php echo "<li>php</li>" ?>
            </p>
            <p>
                <?php 
                if(!$fname)
                {
                    echo $fname." ".$lname;
                }
                else 
                {
                    echo "else part..!";
                }
                
                ?>
            </p>
        </h1>
    </div>
</body>
</html>

