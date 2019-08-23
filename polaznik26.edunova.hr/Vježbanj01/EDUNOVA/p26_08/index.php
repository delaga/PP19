<?php

require_once "baza.php";

$izraz = $veza->prepare("
    insert into smjer (naziv,cijena,upisnina,trajanje,certificiran)
    values (:naziv,:cijena,500,100,1);"

);
//asocijativni niz ključ je naziv parametra a 
//vrijednost dolazi iz $_GET["naziv"]
//$izraz->execute(["naziv"=>$_GET["naziv"]]);
//   index.php?naziv=Novi%20iz%20PHP-a&cijena=2000
$izraz->execute($_GET);