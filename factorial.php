<?php
    function factorial($num){
        if($num == 0 || $num == 1) return 1;
        else return $num * factorial($num - 1);
    }

    echo factorial(170);
    function ascend($num){
        if ($num == 0) return;
        else ascend($num - 1);
        echo " $num ";
    }

    echo ascend(20);

    function famDown($num){
        $value = $num % 2 == 0 ? $num : $num -1;
        if($value < 0) return;
        echo " $value ";
        famDown($value - 2);
    }
    famDown(111);

?>