<?php

$a = $argv[1];

for ($i = $a; $i > 0; $i--){
    echo PHP_EOL;
    for ($j = $i; $j <= $a; $j++){
        echo "*";
        echo " ";
    }
    $i--;
}
for ($i = $a; $i > 0; $i--){
    for ($j = $i; $j <= $a-2; $j++){
        echo "*";
        echo " ";
    }
    echo PHP_EOL;
    $i--;
}
