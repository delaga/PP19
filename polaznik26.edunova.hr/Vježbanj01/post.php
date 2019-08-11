

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTTP POST Request</title>
</head>
<body>
    <h1>HTTP POST Request</h1>
    <br>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>"
          method="post">

        <label for="name">Ime</label>
        <input type="text" name="name" id="name">

        <label for="mail">email</label>
        <input type="email" name="mail" id="mail">

        <input type="submit" name="submit" value="Submit">

    </form>
    <?php
       extract($_POST);
        echo "<br>";
        echo $name;
        echo "<br>";
        echo $mail;
    ?>

</body>
</html>