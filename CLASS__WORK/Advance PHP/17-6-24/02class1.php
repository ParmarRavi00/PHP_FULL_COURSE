<?php 

class Test 
{

    public $x;
    public $y=12;  
    
    public function t1()
    {
        echo "t1<br>";
    }

    public function setX($valX)//123
    {
        global $x;
        $x = $valX;//123
    }

    public function getX()
    {
        // global $x;
        echo $GLOBALS['x'];
    }

    function f1()
    {
        $z=12;
        echo "<br>".$z."<br>";
    }
}



$ob = new Test;
echo $ob->y."<br>";//12
$ob->t1();//t1
$ob->setX(123);
$ob->getX();
$ob->f1();