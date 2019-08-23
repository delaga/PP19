<?php

// prilagođena sintaksa

$t=2; 
$i=1;

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