<?php

// prilagođena sintaksa

$t=2;
$i=0;

// & provjerava oba uvjeta
// && uvjetovani & - u slučaju da prvi ne prođe, ne provjerava drugi
if($t==2 && $i>0):
    ?>

    <h1>Komarci</h1>







    <?php

else:
    ?>

    <h1>Avioni</h1>

    <?php
endif;
?>
<?php
    $a=1;
    $b=3;
    if($a==1 && $b==5):
        ?>
<h3>Kurac</h3>
<?php
    else:
        ?>
<h1>PIČKA</h1>
<?php
        endif;
        ?>
