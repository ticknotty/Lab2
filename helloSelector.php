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
<input type="submit" value="Submit">
</form>
<br>
<form action="formResponse.php" method="post">
    <label>Day: </label>
        <input type="text" name="day">
    <label>Month: </label>
        <input type="text" name="month">
    <label>Year: </label>
    <input type="text" name="year">
<input type="submit" value=Submit">
</form>
</body>
</html>
<?php


