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
    Day (between 1 and 31):
    <input type="number" name="day" min="1" max="31">
    <label>Month: </label>
    <input type="text" name="month">
    <label>Year: </label>
    <input type="text" name="year">
<input type="submit" value="Submit">
<br>
</form>
</body>
</html>
<?php


