<?php 

class Test 
{
    private $x=12;
    public $y;

    function SetX($n1,$n2)
    {
        // global $x;
        $this->x=$n1+$n2;//12+10
        
    }

    function Getx()
    {
        echo $this->x."<br>";//22
    }
}

$ob = new Test;
// echo  $ob->x;
$ob->SetX(12,100);
$ob->getX();