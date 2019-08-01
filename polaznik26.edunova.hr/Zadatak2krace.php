<?php

// stranica prima dva broja GET metodom
// ispisuje veći

// inline if

$pb = isset($_GET["a"]) ? $_GET["a"] : 0;
$db = isset($_GET["b"]) ? $_GET["b"] : 0;

// odavdje nadalje radim s varijablama
if($pb>$db){
    echo $pb;
}else if($db>$pb){ // ili elseif
    echo $db;
}else{
    echo "Brojevi su jednaki ili ih niste unijeli";
}
