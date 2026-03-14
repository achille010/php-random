<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handler</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        textarea {
            width: 100%;
            height: 100px;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            background: #f0f0f0;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <h1>File Handler</h1>

    <h3>Write to File</h3>
    <form method="post">
        <label for="content">Content to write:</label><br>
        <textarea name="content" id="content" required>jyedi@rca, sandra@rca, a@rca</textarea><br>
        <button type="submit" name="write">Write to File</button>
    </form>

    <h3>Read from File</h3>
    <form method="post">
        <button type="submit" name="read">Read File</button>
    </form>

    <?php
    $file = 'src/utils/data.txt';

    if (isset($_POST['write'])) {
        $content = $_POST['content'];
        $fh = fopen($file, 'w+');
        fwrite($fh, $content);
        fclose($fh);
        echo "<p class='result'>Content written to file.</p>";
    }

    if (isset($_POST['read'])) {
        if (file_exists($file)) {
            $fh = fopen($file, 'r');
            $content = fread($fh, filesize($file));
            fclose($fh);
            echo "<div class='result'><h4>File Content:</h4><pre>" . htmlspecialchars($content) . "</pre></div>";
        } else {
            echo "<p class='result'>File does not exist.</p>";
        }
    }
    ?>
</body>

</html>