<?php

//checking if all letters alphabet are into your word

$tab = [];

function sprawdzTekst($teskt){

    $charArray = str_split($teskt);

    for($i = 'a'; $i <= 'z'; $i++){
        $tab[$i] = false;
        if($i=='z') break;
    }

    foreach ($charArray as $char){
        $tab[$char] = true;
    }

    for($i = 'a'; $i <= 'z'; $i++){
        if($tab[$i] === false){
            return false;
        }
        if($i=='z') break;
    }

    return true;
}

echo sprawdzTekst("abcdefghijklmnoprstuwxyzqv")? "Sa wszystkie":"Brak wszystkich";