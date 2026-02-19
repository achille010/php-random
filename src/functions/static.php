<?php

    function add(...$nums){
        $total = 0;
        foreach($nums as $num){
            $total += $num;
        }
        return $total;
    }

    
    echo add(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    echo ADD(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
?>