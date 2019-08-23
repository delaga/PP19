<?php

// operatori uvećanja i umanjenja
// inkrement/dekrement

$i=3;

$i=$i+1;
//4
$i+=1; //isto ponašanje kao prethodna linija
//5
$i++; //isto ponašanje kao prethodna linija
//6

// razlika između $i++ i ++$i;

$i=0;

echo ++$i; //1
echo $i++; //1
echo $i; //2

//ista priča s umanjenjem
--$i;
$i--;