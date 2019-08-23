<?php

/*
funkcija koja prima jedan parametar
i vraća vrijednost tipa boolean
*/
function primBroj($b)
{
    for($i=2;$i<$b;$i++){
        if($b%$i===0){
            return false;
        }
    }

    return true;
}


/**
 * funkcija koja prima parametre ali ništa ne vraća
 */
function vardump($v,$dev=false)
{
    echo "<pre";
    if($dev){
        echo " style=\"color: red\"";
    }
    echo ">";
    var_dump($v);
    echo "</pre>";
}



/**
 * funkcija koja ne prima parametre 
 * vraća vrijednost
 * 
 */
 function vrijeme()
 {
     return date("d. m. Y. h:i:s");
 }


/**
 * funkcija koja ne prima parametre 
 * ne vraća vrijednost
 * 
 */
function mojPhpInfo()
{
    vardump($_SERVER["PHP_SELF"]);
    //ovdje bi došlo još nešto
}