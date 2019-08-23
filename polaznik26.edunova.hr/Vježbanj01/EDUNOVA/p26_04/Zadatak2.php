<?php

// stranica prima dva broja GET metodom
// ispisuje veći

if(isset($_GET["a"])){
    $pb=$_GET["a"];
}else{
    $pb=0;
}

if(isset($_GET["b"])){
    $db=$_GET["b"];
}else{
    $db=0;
}

// odavdje nadalje radim s varijablama
if($pb>$db){
    echo $pb;
}else{
    if($db>$pb){
        echo $db;
    }else{
        echo "Brojevi su jednaki ili ih niste unijeli";
    }
}