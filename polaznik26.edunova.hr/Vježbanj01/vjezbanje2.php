<?php
    class Knjige{
        public function naziv(){
            echo "Knjiga";
        }
        public function cijena(){
            echo "1111";
        }
    }

    $knjiga=new Knjige();
    $knjiga->naziv();
    $knjiga->cijena();