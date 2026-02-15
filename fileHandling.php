<?php
/*I have learnt 
    fopen("PATH", "mode"),
    fread("FILE", "sizeToRead"),
    fwrite("File", "Content"),
    fgets("FILE"),
    fclose("File"), 

    => High level ---file_get_contents("File"), 
    => High level ---file_put_contents("PATH", "Content", "FILE_APPEND")
    => High level ---file("PATH") -> print_r("arrayFormed")
    => High level ---readfile("PATH")

    file_exists(),
    is_file(),
    is_dir()
    unlink('FILE'),
    copy('FROM', 'TO'),
    rename('From', 'TO')
    filesize('PATH')
    stat('PATH'),
    mkdir('Name'),
    rmdir('Name'),
    scandir('Name');
*/  
    date_default_timezone_set("Africa/Kigali");
    echo date_default_timezone_get(). "<br>";
    echo date("Y-m-d H:i:s");
?>