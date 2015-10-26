<!DOCTYPE>
<html>
<head>
</head>
<body>
<form action="formResponse.php" method="post">
<label>Forename: </label>
    <input type="text" name="forename">
<label>Surname: </label>
    <input type ="text" name="surname">
    <br>
    Day:
    <input type="number" name="day" min="1" max="31">
    Month:
    <input type="number" name="month" min="1" max="12">
    Year:
    <input type="number" name="year" min="1900" max="2015">
    <br>
    <input type="radio" name="sex" value="male" checked>Male
    <br>
    <input type="radio" name="sex" value="female">Female
    <br>
    <input type="checkbox" name="power1" value="Flying"> I can fly
    <br>
    <input type="checkbox" name="power2" value="Strength"> I am strong
    <br>
    <input type="checkbox" name="power3" value="Invisible"> I can go invisible
<input type="submit" value="Submit">
<br>
</form>
</body>
</html>
<?php


