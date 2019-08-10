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
        echo "<hr>";
        for ($i=0; $i < 10; $i++) { 
            $val=$i*10;
            echo "$i *10 is $val"."<br>";
        }
        echo "<hr>";
        for ($i=1; $i <=10 ; $i++) { 
            echo "<br>";
            for ($j=1; $j <=10 ; $j++) {
                $tm=$i*$j; 
               
                echo "  $tm     "."-";
            }
        }
        echo "<hr>";
        $niz=array("Prvi","Drugi","Treci","Cetvrti","Peti");
        foreach ($niz as $dumina) {
            echo $dumina."<br>";
        }
        echo "<hr>";

        

    ?>

</body>
</html>