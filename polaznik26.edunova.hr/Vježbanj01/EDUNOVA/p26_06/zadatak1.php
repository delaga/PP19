<?php

// ispišite zbroj svih prim brojeva od 28 do 59

include_once "funkcije.php";

$zbroj=0;
for($i=28;$i<=59;$i++){
    $zbroj += primBroj($i) ? $i : 0;
}
echo $zbroj;