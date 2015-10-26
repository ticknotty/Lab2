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
echo "Name: " . $forename . " " . $surname;

echo "DOB: " . $day . "/" . $month . "/" . $year;
?>