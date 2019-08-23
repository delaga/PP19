<?php


 // zbrojite prvih 100 brojeva

 // 1. zavrtiti petlju od 0 da 100 da vidimo imamo li te brojeve
//$suma=0;
// for ($i=0; $i < 100+1; $i++) {
//     echo $suma," + ",$i,"<br />";
//     $suma=$suma+$i; //$suma+=$i;
// }
// echo $suma;
$suma=0;
for($i=0;$i<=100;$i++){
    $suma=$suma+$i;
    echo $suma." + ".$i." = "."<br>";

}
echo $suma;