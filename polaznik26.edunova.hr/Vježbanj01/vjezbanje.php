<?php

$niz=[
    "k1"=>1,
    "k2"=>2
];

/*
$i=2;$j=1;
$i=$j++ + ++$i + 1;
$j=0 + $i++;
echo $i - $j + 1;
*/


$i=1;
while(true){
    if($i++>1){
        break;
    }
}
echo $i;