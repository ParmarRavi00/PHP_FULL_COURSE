<?php 

// for($row=1;$row<=3;$row++) // rows 1;1<=3;1++
// {
//     for($col=1;$col<=3;$col++) // cols 1;1<=3;1++
//     {
//         echo "* ";
//     }
//     echo "<br>";
// }

// for($row=1;$row<=3;$row++) // rows 1;1<=3;1++
// {
//     for($col=1;$col<=3;$col++) // cols 1;1<=3;1++
//     {
//         echo $col." ";
//     }
//     echo "<br>";
// }

// for($row=1;$row<=3;$row++) // rows 1;1<=3;1++
// {
//     for($col=1;$col<=3;$col++) // cols 1;1<=3;1++
//     {
//         echo $row." ";
//     }
//     echo "<br>";
// }

// for($row=1;$row<=3;$row++) // rows 1;1<=3;1++
// {
//     for($col=1;$col<=$row;$col++) // cols 1;1<=3;1++
//     {
//         echo $row." ";
//     }
//     echo "<br>";
// }


// $x=1;

// for($row=1;$row<=5;$row++) // rows 1;1<=3;1++
// {
//     for($col=1;$col<=$row;$col++) // cols 1;1<=3;1++
//     {
//         echo $x++." ";
//     }
//     echo "<br>";
// }


// $x=1;

// for($row=1;$row<=5;$row++) // rows 1;1<=3;1++
// {
//     for($col=1;$col<=$row;$col++) // cols 1;1<=3;1++
//     {
//         if($row%2!=0)
//         {
//             echo "A ";
//         }
//         else 
//         {
//             echo "B ";
//         }
//     }
//     echo "<br>";
// }

for($i=3;$i>=1;$i--)
{
    for($j=1;$j<=$i;$j++)
    {
        echo "* ";
    }
    echo "<br>";
}