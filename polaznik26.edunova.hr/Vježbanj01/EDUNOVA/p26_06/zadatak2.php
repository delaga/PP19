<?php


// ispisati najveći primljeni GET parametar
// pretpostavka, svi primljeni parametri su brojevi

// /zadatak2.php?a=2&aa=3&b=10&c=5&broj=25
// ispisuje 25
if(isset($_GET["a"])){
    $a=$_GET["a"];
}else{
    echo "Fali broj";
}

if(isset($_GET["b"])){
    $b=$_GET["b"];
}else{
    echo "Fali broj";
}

if(isset($_GET["c"])){
    $c=$_GET["c"];
}else{
    echo "Fali broj";
}
    if ($a>$b && $a>$c){
        echo "Najveći je broj:".$a;
    }elseif ($b>$a && $b>$c){
        echo  "Najveći je broj:".$b;
    }else{
        echo "Najveći je broj:".$c;
    }