<?php


// ako program primi GET parametar broj
// ispisuje ga uvećanog za 12 puta
// inače ispiši: obavezan GET parametar broj

if(isset($_GET["broj"])){
    echo $_GET["broj"]*12;
}else{
    echo "obavezan GET parametar broj";
}