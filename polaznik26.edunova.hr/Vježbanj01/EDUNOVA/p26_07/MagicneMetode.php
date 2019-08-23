<?php

//čarobne metode

class Smjer{

    public function __construct(){
        echo "Konstruktor<br />";
    }

    public function __set($svojstvo,$vrijednost){
        echo $svojstvo, "=", $vrijednost, "<br />";
    }

    public function __get($svojstvo){
        echo $svojstvo, "<br />";
    }

}

$s = new Smjer();
$s->naziv="PHP programiranje";
echo $s->naziv;




class Klasa{

    private $podaci;

    public function __construct(){
        $this->podaci=[];
    }

    public function __set($svojstvo,$vrijednost){
        $this->podaci[$svojstvo]=$vrijednost;
    }

    public function __get($svojstvo){
        return $this->podaci[$svojstvo];
    }

}

$smjer = new Klasa();
$smjer->naziv="PHP";
$smjer->trajanje=130;

echo $smjer->trajanje;

$sat = new Klasa();
$sat->proizvodac="Rolex";
echo $sat->proizvodac;


$mobitel = new stdClass();
$mobitel->marka="Samsung";
$mobitel->os="Android";
$mobitel->modeli=["A6","A9"];

$smjer=new stdClass();
$smjer->naziv="PHP";

$mobitel->smjer=$smjer;



//ispišite PHP - krenuti s mobitel
echo $mobitel->smjer->naziv;

