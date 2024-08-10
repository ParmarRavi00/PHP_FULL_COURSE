

<?php 

interface Test 
{
     function t1();// abstract function/method (method without body)
    
}

interface Test1 
{
    function t2();
}

class child1 implements Test,Test1
{
    function t1()
    {
        echo "abs t1<br>";
    }

    function t2()
    {
        echo "abs t2<br>";
    }
}
$ob = new child1;
$ob->t1();
$ob->t2();


