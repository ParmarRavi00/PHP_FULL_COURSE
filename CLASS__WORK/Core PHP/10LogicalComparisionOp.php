<?php 

$res1 = (1<1) ? "t" :"f";//f
$res2 = (1<=1) ? "t" :"f";//t
$res3 = (1>1) ? "t" :"f";//f
$res4 = (1>=1) ? "t" :"f";//t
$res5 = (1==1) ? "t" :"f";//t
$res6 = (1!=1) ? "t" :"f";//f
$res7 = (1!="1") ? "t" :"f";//f
$res8 = (1=="1") ? "t" :"f";//t
$res9 = (1!=="1") ? "t" :"f";//t
$res10 = (1==="1") ? "t" :"f";//f

echo $res1."<br>";
echo $res2."<br>";
echo $res3."<br>";
echo $res4."<br>";
echo $res5."<br>";
echo $res6."<br>";
echo $res7."<br>";
echo $res8."<br>";
echo $res9."<br>";
echo $res10."<br>";



$r1= (1==1 && 1<1) ? "t" :"f";//f
$r2= (1==1 || 1<1) ? "t" :"f";//t
$r3= (1=="1" && 1<=1) ? "t" :"f";//t
$r4= (1==="1" && 1<=1) ? "t" :"f";//f
$r5= (1!=="1" || 1<=1) ? "t" :"f";//t
$r6= (1==="1" || 1<=1) ? "t" :"f";//t
$r7= (!false) ? "t" :"f";//t
$r8= (!true) ? "t" :"f";//f

$r9 = !(1==1 && 1<=1) ? "true":"false";

echo "<br>";
echo $r1."<br>";//f
echo $r2."<br>";//t
echo $r3."<br>";//t
echo $r4."<br>";//f
echo $r5."<br>";//t
echo $r6."<br>";//t
 echo $r7."<br>";//t
 echo $r8."<br>";//t
 echo $r9."<br>";//t


