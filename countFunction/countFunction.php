<?php

//counting all functions in PHP

function iloscFunkcji(){
    $ilosc = get_defined_functions();
    return $suma = count(array_merge($ilosc['internal'], $ilosc['user']));
}

echo iloscFunkcji();
