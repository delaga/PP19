<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Date and Time </title>
</head>
<body>
<?php
        echo strtotime('today');
        echo "<br>";
        echo strtotime('tomorrow');
        echo "<br>";
        echo strtotime('yesterday');
        echo "<br>";
        echo strtotime('last saturday of December 2017');
        echo "<br>";
        echo strtotime('18-September-1975');
        echo "<br>";
        echo strtotime('2019-08-11');
        echo "<br>";
        echo strtotime("January 22nd 2008");
        echo "<br>";
        echo "<h1>Formatted dates</h1>";
        echo "<br>";
        echo date('d/m/Y', strtotime('today'));
        echo "<br>";
        echo date('F jS Y',strtotime('tomorrow'));
        echo "<br>";
        echo date('l  \t\h\e jS \o\f F',strtotime('2008-01-22'));
        echo "<br>";
        echo date('W',strtotime('yesterday'));
        echo "<br>";
        echo date(DATE_ATOM,strtotime('today'));


?>
</body>
</html>