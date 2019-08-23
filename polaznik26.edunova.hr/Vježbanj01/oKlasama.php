<?php



class Posao
{
    public function odradi1()
    {
        echo "Odradio posao 1";
    }

    public function odradi2()
    {
        echo "Odradio posao 2";
    }
}

class Odmor
{
    public function odmorio1()
    {
        echo "Odradio odmor 1";
    }

    public function odmorio2()
    {
        echo "Odradio ormor 2";
    }
}

$klasa ="Posao";
$metoda = "odradi2";

$i = new $klasa;

$i->$metoda();