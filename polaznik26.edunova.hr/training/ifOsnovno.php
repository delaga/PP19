<?php


// kontrolne strukture

//uvjetna grananja

// if naredba radi s bool tipom podatka

$uvjet=false;

//var_dump($uvjet);
// PRATITI https://www.php-fig.org/psr/
if($uvjet){
    // u if granu se ulaziu ako je true
    echo "OK";
    echo "1";
}

//loš način
if($uvjet) //ako if nema {} odnosi se samo na 1. liniju nakon njega
    echo "OK";
    echo "1";

// ne obavezni dio if naredbe je else

if($uvjet){
    echo "OK";
}else{
    echo "GREŠKA";
}

