<?php

$name = "";

for($i = 1; $i < $argc; $i++){
    $name .= $argv[$i];
}

$reverse_name = strrev($name);

echo "Odwrocona nazwa: ".$reverse_name;
echo PHP_EOL;
echo ($name == $reverse_name)? "Jest Palindromem":"Nie jest palindromem";
