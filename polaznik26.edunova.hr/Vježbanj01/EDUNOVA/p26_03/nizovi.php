<?php

//nizovi
//stara sintaksa
$niz = array(2,3,"Pero",true,3.4);
echo "<pre>";
var_dump($niz);
echo "</pre>";

// NOVA SINTAKSA
$x = [2,3,4];

// Indeksni nizovi
$x=["Osijek","Valpovo","Josipovac","Čepin"];

// funkcija count
echo count($x);

//indeksi kreću od 0
echo "<hr />";
echo $x[0];

echo "<hr />";
//ispis zadnjeg
echo $x[count($x)-1];


//asocijativni nizovi - KLJUČ => VRIJEDNOST
$x = [
    "sifra"=>1,
    "naziv"=>"PHP programiranje",
    "cijena"=>4999.99
];
echo "<hr />";
echo "<pre>";
var_dump($x);
echo "</pre>";

// kombinacija

$podaci=[
    ["sifra"=>1,"naziv"=>"Prvi"],
    ["sifra"=>2,"naziv"=>"Drugi"]
];
echo "<hr />";
echo "<pre>";
var_dump($podaci);
echo "</pre>";
echo $podaci[0]["naziv"];