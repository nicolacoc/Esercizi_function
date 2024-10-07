<?php


function GetPrimeNumber(int $startNumber, int $endNumber = 10): array
{
    require_once('Esercizio_1.php');
    $Numbers = array();
    for ($i = $startNumber, $ok = 1; $ok <= $endNumber; $i++) {
            $number = primeNumber($i);
            if ($i > 0 && $number) {
                $Numbers[] = $i;
                $ok++;
            }


    }
    return $Numbers;
}

$numbers = GetPrimeNumber(1);
echo implode(", ", $numbers);