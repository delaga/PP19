<?php

// Stranica prima 3 broja POST metodom
// ispisuje najmanji

?>

<form action="<?php echo $_SERVER["PHP_SELF"] ?>" 
method="post">

<label for="pb">Prvi broj</label>
<input type="number" name="pb" id="pb">

<label for="db">Drugi broj</label>
<input type="number" name="db" id="db">

<label for="tb">Treći broj</label>
<input type="number" name="tb" id="tb">

<input type="submit" value="Pronađi">

</form>


<?php

if($_POST):
   // echo "pronađi";

   $pb =$_POST["pb"];
   $db =$_POST["db"];
   $tb =$_POST["tb"];

   if($pb<=$db && $pb<=$tb){
       echo $pb;
   }else if ($db<=$pb && $db<=$tb){
       echo $db;
   }else{
       echo $tb;
   }

endif;

// domaća zadaća:
//isti ovaj zadatak riješiti s:
// https://foundation.zurb.com/
// https://getbootstrap.com/
// https://materializecss.com/