<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "head.php"; ?>
  </head>
  <body>
    <div class="grid-container">
      <a href="onama.php">O nama</a>
      <?php include_once "tijelo.php"; 
      
      echo $_GET["boja"];
      
      
      
      
      
      ?>    

      <div style="background-color: <?php echo $_GET["boja"] ?>">
        <?=$_GET["grad"]?>
      </div>

    </div>
    <?php include_once "skripte.php"; ?>
  </body>
</html>