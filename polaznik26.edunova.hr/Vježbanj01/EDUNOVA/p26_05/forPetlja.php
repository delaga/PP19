<?php

// iz PHP-a ispišite Osijek jedno ispod drugog 10 puta
echo "Osijek<br />";
echo "Osijek<br />";
echo "Osijek<br />";
echo "Osijek<br />";
echo "Osijek<br />";
echo "Osijek<br />";
echo "Osijek<br />";
echo "Osijek<br />";
echo "Osijek<br />";
echo "Osijek<br />";

// ovo gore se ne radi

// for(od kuda; do kuda; uvećanje)

for($i=0;$i<10;$i++){
    echo "Osijek<br />";
}

for($i=0;$i<10;$i++){
    echo ($i+1) . ". Osijek<br />";
}


// petlje je moguće preskočiti (nastaviti) te nasilno prekinuti

$poc=0; $kraj=10;

for($i=$poc;$i<$kraj+1;$i++){
    if($i===1 || $i===0){ //dva jednako provjerava samo vrijednost
        // tri jednako provjerava i tip i vrijendost
        continue;
    }

    if($i>20){
        break;
    }

    echo $i,"<br />";


}

for($i=0;$i<10;$i++):

endfor;




for($i=10;$i>0;$i=$i-3){
    echo $i,"<br />";
}


