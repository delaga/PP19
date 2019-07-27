<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "head.php"; ?>
  </head>
  <body>
    <div class="grid-container">
        <a href="index.php">Početna</a>
      
      <?php 
      //učitava samo jednom
      //include_once "tijelo.php";
      //include_once "tijelo.php";
      

      include "tijelo.php";
      //razlika između include i require je ta da require baca grešku a include ne
     //require "tijelo1.php";

      ?>


    </div>


    <form action="" method="post">

        <input type="text" name="boja">

        <input type="submit" value="Postavi">

    </form>

<?=$_POST["boja"]?>

    <?php include_once "skripte.php"; ?>
  </body>
</html>