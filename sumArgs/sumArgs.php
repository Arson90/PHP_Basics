<?php

$suma = 0;

for($i = 1; $i < $argc; $i++){
    $suma += (int)$argv[$i];
}

echo("Suma: ".$suma);