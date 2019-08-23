<?php
// funkcija isset provjerava da li je postavljena varijabla
if(isset($_GET["b"])){
    echo $_GET["b"];
}

//prikazivanje razine obavijesti
//https://www.php.net/manual/en/function.error-reporting.php
error_reporting(E_ERROR);
//ZAPAMTITI: na shared hostinzima znaju staviti E_NONE pa ne vidite ništa
echo $_GET["t"];
