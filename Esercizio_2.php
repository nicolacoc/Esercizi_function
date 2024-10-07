<?php
require_once('Esercizio_1.php');

function GetPrimeNumber(int $startNumber, int $endNumber = 10): array
{

    $Numbers = array();
    for ($i = $startNumber, $ok = 1; $ok <= $endNumber; $i++) {
        if ($i > 0) {
            $number = primeNumber($i);
            if ($number) {
                $Numbers[] = $i;
                $ok++;
            }
        }

    }
    return $Numbers;
}

$numbers = GetPrimeNumber(1, 10);
echo implode(", ", $numbers);