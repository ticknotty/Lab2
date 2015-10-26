<!DOCTYPE>
<html>
<head>
</head>
<body>
<a href="helloPrinter.php?planet=earth">
    Earth
</a>
<br>
<br>
<a href="helloPrinter.php?planet=mars">
    Mars
</a>
<br>
<br>
<a href="helloPrinter.php?planet=uranus">
    Uranus
</a>
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
    <input type="radio" name="sex" value="Male" checked>Male
    <br>
    <input type="radio" name="sex" value="Female">Female
    <br>
<input type="submit" value="Submit">
<br>
</form>
</body>
</html>
<?php


