<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 05/02/20
 * Time: 10:12
 */
echo"<link rel='stylesheet' href='style.css'>";
echo "Hello PhP", " I am Fabian";
$a = "23 years";
$b= "Albert";
$c=233.44;
echo " at the age of ".$a," the boy ".$b," weighed ".$c;
$c=5;
$d=6;
echo "<br>";
echo "Sum of $c and $d is ".($c+$d);
$e=5;
$f=6;
$temp=0;
echo "The value of e is ".$e;
echo " the value of f is ".$f;
$temp = $e;
$e = $f;
$f = $temp;
echo " Value of e after swap ".$e;
echo " value of f after swap ".$f;
$g=6;
$h=4;
echo "<br>";
echo "Value of g ".$g;
echo " value of h ".$h;
$g=$g+$h;
$h=$g-$h;
$g=$g-$h;
echo " value of g after swap ".$g;
echo " value of h after swap.".$h;
echo "<br>";
$j=25;
$i=5;
echo "Sum of j and i is ".($j+$i);
echo "<br>";
echo " difference of j and i is ".($j-$i);
echo "<br>";
echo " multiplication of j and i is ".($j*$i);
echo "<br>";
echo " division of j and i is ".($j/$i);
echo "<br>";
$a=2;
$b=3;
$c=5;
$d=15;
$e=25;
$sum=($a+$b+$c+$d+$e);
$avg=($a+$b+$c+$d+$e)/5;
echo " Sum of a, b, c, d and e is $sum.";
echo " Average of a, b, c, d and e is $avg.";
echo "<p class='try'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores beatae cumque, earum est impedit inventore itaque laudantium non numquam officia, quas qui quis quisquam recusandae, suscipit unde vel? Dignissimos, officia!</p>";

echo "<br> <hr>";

$age =array("Peter"=>"53","Ben"=>"37","Joe"=>"43");
krsort($age);

foreach ($age as $x => $x_value)
{
    echo "Key=".$x.",Value=".$x_value;
    echo "<br>";
}

echo "<br> <hr>";


