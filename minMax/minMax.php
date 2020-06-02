<?php

$min = $argv[1];
$max = $argv[1];

for($i = 2; $i < $argc; $i++){
    if($argv[$i] < $min){
        $min = $argv[$i];
    }
    if($argv[$i] > $max){
        $max = $argv[$i];
    }
}

echo "Min wynosi: ".$min;
echo PHP_EOL;
echo "Max wynosi: ".$max;