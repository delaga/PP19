<?php

//while petlja

$uvjet=true;

var_dump($uvjet);

while($uvjet){
    echo "Osijek<br />";
    $uvjet=!$uvjet;
}


$i=0;
while($i<10+1){
    echo "Osijek<br />";
    $i++;
}

// continue i break rade jednako
//ugnježđivanje radi jednako

/*$i=false; //u while petlju se ne mora ući
while($i){
    echo "Valpovo<br />";
}*/

$i=10;
for($j=100;$j>$i;$j--){
    echo $j." Belišće<br />";
}