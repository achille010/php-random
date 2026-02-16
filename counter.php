<?php
    function counter($num){
        if ($num == 0) return;
        return 1 + counter(intdiv($num, 10));
    }
    echo counter(5234);

    function addDigits($num){
        if($num == 0) return 0;
        return ($num % 10) + addDigits(intdiv($num, 10));
    }
    echo " ". addDigits(12345);

    function power($base, $exponent){
        if($exponent == 0) return 1;
        return $base * power($base, $exponent - 1);
    }
    echo " ". power(5, 2); 
?>