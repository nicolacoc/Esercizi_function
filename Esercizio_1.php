<?php
function primeNumber(int $number):bool{
if ($number >= 2){
    $operation = ($number == 2 || $number % 2 > 0);
    return ($operation)?true:false;
    }else{
    return false;
}
}

