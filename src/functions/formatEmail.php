<?php
    function formatEmail($email){
        $email = strtolower($email);
        $newEmail = preg_replace('/\s+/', '', $email);
        return $newEmail;
    }

    echo formatEmail("HASHIM\fWEYESU  JEANDE DIEU\t  \v \n    @jmail .  com")."<hr>";
    echo formatEmail(" USEREMAIL @GMAIL.COM    ");
?>