<?php
function checkNum($num){
    if ($num > 1){
        throw new Exception("Your number is greater than 1");
    }
    return true;
}

try {
    checkNum(2);
    echo "If you can read this, your program runs";
} catch (Exception $e){
    echo "The program didn't run";
}

?>