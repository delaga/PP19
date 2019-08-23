<?php

// pretpostavka: vrjiednosti svih primljenih GET parametara
// su cijeli brojevi

// ispiši sumu svih primljenih GET parametara

//$suma=0;
//foreach($_GET as $k => $v){
//    $suma+=$v;
//}
//echo $suma;

$suma=0;
foreach ($_GET as $k=>$v){
    $suma+=$v;
}
echo $suma;