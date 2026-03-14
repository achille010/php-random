
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling Notes</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        pre { background: #f4f4f4; padding: 10px; border-radius: 5px; }
        .current-time { font-weight: bold; color: blue; }
    </style>
</head>
<body>
    <h1>File Handling Notes</h1>
    <p>Learn about PHP file operations:</p>
    <pre>
I have learnt
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
    </pre>

    <h3>Current Date and Time</h3>
    <?php
    date_default_timezone_set("Africa/Kigali");
    echo "<p>Timezone: " . date_default_timezone_get() . "</p>";
    echo "<p class='current-time'>Current Time: " . date("Y-m-d H:i:s") . "</p>";
    ?>
</body>
</html>