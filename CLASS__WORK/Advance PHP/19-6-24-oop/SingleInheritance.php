<?php 

class Parent1 
{
    public $x=11;
    protected $y;

    protected $z;

    protected function getY($y1)//12
    {
        $this->y = $y1;//12
        echo $this->y."<br>";//12

    }

    public function fun1()
    {
        echo $this->x."<br>";
    }

}

class Child1 extends Parent1
{
    public function getProtectedVar($z1)
    {
        //echo Parent1::$z;// error it must be static var
    }
}

class Child2 extends Parent1
{

    public function getParentGetY()
    {
        // Parent1::getY(123);

        parent::getY(456);
    }
     
}

$ob = new Child1;
$ob->fun1();
// $ob->getProtectedVar();

$ob1= new Child2;
$ob1->getParentGetY();



