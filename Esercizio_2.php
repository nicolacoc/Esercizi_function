<?php
require_once ('Esercizio_1.php');

$max = 10;

for ($i = 0, $ok = 1; $ok <= $max; $i++){

    $number = primeNumber($i);
    if ($number){
        echo $i . ($ok == $max ? "":", ");
        $ok++;
    }

}