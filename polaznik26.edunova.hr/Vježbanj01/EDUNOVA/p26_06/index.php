<?php

//napišite program koji zbraja prvih 100 brojeva
//5050

//$zbroj=0;
//for($i=1;$i<=100;$i++){
//    $zbroj+=$i;
//}
//echo $zbroj;

function zbroj($i)
{
    if($i===0){
        return 0;
    }

    return $i + zbroj(--$i);
}

echo zbroj(100);