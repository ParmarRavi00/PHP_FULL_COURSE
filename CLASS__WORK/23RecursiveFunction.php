<?php

$x = 1;
function t()
{
    global $x;

    if ($x <= 3)//4<=3
     {
        echo "hello <br>"; //hello 
        $x++;//4
        t();
      
    }
}

t();
