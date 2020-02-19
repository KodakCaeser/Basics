<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 18/02/20
 * Time: 09:52
 */
phpinfo();
echo "<h1>Functions</h1>";
function writeMsg()
{
    echo "Hello world";
}
        writeMsg();

echo "<br> <hr>";

function familyName($fname)
{
    echo "$fname Koech. <br>";
}

familyName("Jane");
familyName("Harry");
familyName("Stacy");
familyName("Kai");
familyName("Kip");

echo "<br> <hr>";

function familyAge($fname, $year)
{
    echo "$fname Refsnes. Born in $year <br>";
}

familyAge("Hege","1975");
familyAge("Stale","1978");
familyAge("Kai Jim","1983");

echo "<br> <hr>";

 function addNumbers(int $a, int $b)
 {
     return $a + $b;
 }
 echo addNumbers(5, 50);

echo "<br> <hr>";

echo "<h1>Default value</h1>";

function setHeight(int $minheight = 50)
{
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);

echo "<br> <hr>";

function sum(int $x, int $y)
{
    $z = $x + $y;
    return $z;
}

echo "5 + 10 =". sum(5,10)."<br>";
echo "7 + 13 =". sum(7,13)."<br>";
echo "2 + 4 =". sum(2,4)."<br>";

echo "<br> <hr>";

//function add($a, $b):
//int
//{
//    return $a + $b;
//}
//var_dump(add(1, 2));
//var_dump(add(1, 2.5));
// output will be
// int(3)
// Fatal error

echo "<br> <hr>";

function add($a, $b):
float
{
    return $a + $b;
}
var_dump(add(1, 2));
// output will be float(3)

echo "<br> <hr>";

function Message()
{
    echo "I am the best";
}
Message();
