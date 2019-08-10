

<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
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
        $a=$_POST["pb"];
        $b=$_POST["db"];
        $c=$_POST["tb"];

        if ($a>$b && $a>$c){
            echo "Prvi broj je najveći";
        }elseif ($b>$a && $b>$c){
            echo "Drugi broj je najveci";
        }else{
            echo "Treci je naj";
        }
        endif;
        ?>