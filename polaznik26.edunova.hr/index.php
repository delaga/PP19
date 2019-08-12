<?php
//indeksni niz 8 elemenat
$niz=[1,2,3,4,5,6,7,8];


for($i=0;$i<count($niz);$i++){
    echo $niz[$i],"<br />";
}

foreach($niz as $vrijednost){
    echo $vrijednost, "<br />";
}

//asocijativni niz dva ključa, dvije vrijednosti
$niz = ["k1"=>1, "k2"=>2];

foreach($niz as $kljuc => $vrijednost){
    echo $kljuc , ": ", $vrijednost, "<br />";
}