<?php

$osoba=[
    "ime"=>"Marija",
    "prezime"=>"Zimska",
    "visina"=>180
];

echo $osoba["visina"];

// Klasa je opisnik objekta
/*
class Osoba{

    //ne valja
    public $ime;
    public $prezime;
    public $visina;

}

// Objekt je instanca klase
$osoba = new Osoba();
$osoba->ime="Marija";
$osoba->prezime="Zimska";
$osoba->visina=180;

echo "<pre>";
var_dump($osoba);
echo "</pre>";
*/


// OOP princip učahurivanja (encapsulation)
class Osoba{

    //klasa će sakriti svoja svojstva od drugih klasa
    private $ime;
    private $prezime;
    private $visina;

    //klasa će putem javnih funkcija učiniti svojstva dostupnima
    //drugim klasama
    


    /**
     * Get the value of ime
     */ 
    public function getIme()
    {
        return $this->ime;
    }

    /**
     * Set the value of ime
     *
     * @return  self
     */ 
    public function setIme($ime)
    {
        $this->ime = $ime;

        return $this;
    }

    /**
     * Get the value of prezime
     */ 
    public function getPrezime()
    {
        return $this->prezime;
    }

    /**
     * Set the value of prezime
     *
     * @return  self
     */ 
    public function setPrezime($prezime)
    {
        $this->prezime = $prezime;

        return $this;
    }

    /**
     * Get the value of visina
     */ 
    public function getVisina()
    {
        return $this->visina;
    }

    /**
     * Set the value of visina
     *
     * @return  self
     */ 
    public function setVisina($visina)
    {
        $this->visina = $visina;

        return $this;
    }
}

$osoba=new Osoba();

$osoba->setIme("Marija");

echo $osoba->getIme();

//OOP princip nasljđivanja (inheritance)
class Polaznik extends Osoba{

    private $brojUgovora;


    /**
     * Get the value of brojUgovora
     */ 
    public function getBrojUgovora()
    {
        return $this->brojUgovora;
    }

    /**
     * Set the value of brojUgovora
     *
     * @return  self
     */ 
    public function setBrojUgovora($brojUgovora)
    {
        $this->brojUgovora = $brojUgovora;

        return $this;
    }
}

$p = new Polaznik();

$p->setIme("Pero");
$p->setBrojUgovora("12/19");

