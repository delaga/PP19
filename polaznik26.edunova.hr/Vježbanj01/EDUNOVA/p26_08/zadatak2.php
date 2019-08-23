<?php



// unesite 25000 smjerova s nazivima Smjer1 ... Smjer250

require_once "baza.php";

$veza->beginTransaction();
$izraz = $veza->prepare("
    insert into smjer (naziv,cijena,upisnina,trajanje,certificiran)
    values (:naziv,1000,500,100,1);"

);
for($i=1;$i<=250000;$i++){
    $izraz->execute(["naziv"=>"Smjer" . $i]);
    if($i%10000===0){
        $veza->commit();
        $veza->beginTransaction();
        echo "Odradio " . $i. "<br />";
    }
}
$veza->commit();

