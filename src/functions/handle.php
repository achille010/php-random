<?php
    $file = fopen('data.txt', 'w+');
    fwrite($file, 'jyedi@rca, sandra@rca, a@rca');

    rewind($file);
    $content = fread($file, filesize('data.txt'));
    fclose($file);

    echo $content;
?>