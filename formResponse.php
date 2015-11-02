<?php
/**
 * Created by PhpStorm.
 * User: 1202663
 * Date: 26/10/2015
 * Time: 15:46
 */

$forename = $_POST["forename"];
$surname = $_POST["surname"];
$day = $_POST["day"];
$month = $_POST["month"];
$year = $_POST["year"];
$sex = $_POST["sex"];
$power1 = $_POST["power1"];
$power2 = $_POST["power2"];
$power3 = $_POST["power3"];
echo "Name: " . $forename . " " . $surname . "<br>";

echo "DOB: " . $day . "/" . $month . "/" . $year , "<br>";

echo "Gender is: ";

echo $sex;
echo "<br>";
echo "This superhero has the following powers: ";
echo "<br>";
echo $power1;
echo "<br>";
echo $power2;
echo "<br>";
echo $power3;
?>