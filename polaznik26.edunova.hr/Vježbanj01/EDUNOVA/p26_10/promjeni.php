<?php
require_once "baza.php";

$izraz=$veza->prepare("update smjer 
 set naziv=:naziv,
 trajanje=:trajanje,
 cijena=:cijena,
 upisnina=:upisnina,
 certificiran=:verificiran 
 where sifra=:sifra");
$izraz->execute($_POST);

header("location: index.php");

