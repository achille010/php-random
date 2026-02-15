<?php
    $students = array("Sandra", "Jyedi", "Brr brr patapim", "Achille", "Cappucinno Assassino");
    array_push($students, "IGIHOZO", "RUGEMA");

    sort($students);
    
    foreach($students as $student){
        trim($student);
        echo $student."<br>";
    }