<?php

// jedno pored drugog odvojeno zarezom ispišite ključeve
// $_SERVER niza

// ako na asocijativni niz idete samo s jednom varijablom
//dobijete vrijednosti

foreach($_SERVER as  $k => $v){
    echo "Ključ = ".$k," , a vrijednost = ".$v."<br>";
}