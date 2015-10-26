<div class='sex_div'>
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

echo "Name: " . $forename . " " . $surname . "<br>";

echo "DOB: " . $day . "/" . $month . "/" . $year , "<br>";

if($sex=='male') {?>
    <span class='sex_style'>
            <?php echo $row['sex']; ?>
        </span>
    <?php if($job_type=='female') {?>
        <span class='sex_style2'>
            <?php echo $row['sex']; ?>
        </span>
    <?php } ?>
<?php } ?>
</div>
?>