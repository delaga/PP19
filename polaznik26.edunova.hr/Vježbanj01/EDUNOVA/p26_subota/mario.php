<?php


//nizovi i foreach


$niz = [
    "kljuc1" => "Pero",
    "id" => 22,
    2 => "Karlo"
];
//ipisati vrijednost 22
//echo $niz["id"];

//ispiši sve nazive ključeva
//foreach($niz as $k=>$v){
//    echo $k,"<br />";
//}

//ispiši sve nazive ključeva koji su string
//foreach($niz as $k=>$v){
//    if(gettype($k)!=="string"){
//        continue;
//    }
//    echo $k,"<br />";
//}


$niz = [
    [
        "kljuc1" => "Marko",
        "id" => 7
    ],
    [
        "kljuc1" => "Pero",
        "id" => 22
    ]
];

//ispisati vrijednost Marko
//echo $niz[0]["kljuc1"];

//ispisati zbroj id-eva
$zbroj=0;
foreach($niz as $v){
    $zbroj+=$v["id"];
    //echo $v["id"],"<br />";
}
echo $zbroj;