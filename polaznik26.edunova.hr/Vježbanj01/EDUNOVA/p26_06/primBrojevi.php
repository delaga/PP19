<?php

include_once "funkcije.php";

//ispisati sve prim brojeve između 200000 i 300000
for($i=200000; $i<300000; $i++){
    if(primBroj($i)){
        echo $i, "<br />";
    }
}


// za dani broj provjeri da li je prim (prosti) ili ne

$b=262537;

$prim=true;
for($i=2;$i<$b;$i++){
    if($b%$i===0){
        $prim=false;
        break;
    }
}

echo $prim ? "JE" : "NIJE" . " broj<br />";

if($prim==true){
    echo "JE";
}else{
    echo "NIJE";
}
echo " broj<br />"; 

if($prim){
    echo "JE";
}else{
    echo "NIJE";
}
echo " broj<br />"; 