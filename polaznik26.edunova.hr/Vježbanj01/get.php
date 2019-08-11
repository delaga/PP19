<?php
    extract($_GET);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTTP GET Request</title>
</head>
<body>
    <h1>HTTP GET Request</h1>
    <br>
    <?php
        if(!empty($nesto)){
            echo $nesto;
        }
    ?>

</body>
</html>