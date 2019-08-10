<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Basics : Loops</title>
</head>
<body>
    <h1>PHP Basics : Loops</h1>
    <?php
        $i=1;
        while ($i<=10) {
            $val=$i*13;
            echo "$i *13 is $val"."<br>";
            $i++;
        }
    ?>

</body>
</html>