<?php
function primeNumber(int $number):bool{
if ($number >= 2){
    return ($number == 2 || $number % 2 > 0)?true:false;
    }else{
    return false;
}
}

