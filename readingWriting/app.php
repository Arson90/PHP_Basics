<?php

//reading and writing data from/to file

$tekst = file_get_contents("dane_in.txt");
var_dump($tekst);

file_put_contents("dane_out.txt",$tekst);

$kopiaTesktu = file_get_contents("dane_out.txt");
var_dump($kopiaTesktu);
