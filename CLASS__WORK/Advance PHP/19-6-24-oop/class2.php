<?php 

class Test 
{
    public $x;
    private $y=12;
    protected $z=13;
    static $a=23;
    public $y1 =20;

    public function t1($x1)
    {
       
        global $x;
        $x=$x1;
        echo $x + $this->y1 ."<br>";//11+20
    }

    public function GetPrivate()
    {
        echo $this->y."<br>";
    }

    public function getProtected()
    {
        echo $this->z."<br>";
    }

    public function getStatic()
    {
        echo Test::$a."<br>";
       
    }
}
$ob = new Test;
$ob->t1(11);
$ob->GetPrivate();
$ob->getProtected();
$ob->getStatic();
echo Test::$a;
