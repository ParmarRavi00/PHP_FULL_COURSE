<?php 


    $arr = array(1,2,3);//1+2+3=6

    $sum =0;

    foreach($arr as $a)
    {
        $sum = $sum+$a; //
    }

    echo "Sum = ".$sum."<br>";




    function getSum(...$num)
    {
        // echo $num[0]."<br><br>";
        $sum =0;

        foreach($num as $a)
        {
            $sum = $sum+$a; //
        }
    
        echo "Sum = ".$sum."<br>";
    }
    getSum(12);
    getSum(1,2);
    getSum(10,40,50);



    function test($x="Raviraj")// default parameter
    {
        echo $x."<br>";
    }
    test(12);
    test(1.2);
    test();
    test("hi");
    test();
    test();
