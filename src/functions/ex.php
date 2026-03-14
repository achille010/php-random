<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Serving</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
    </style>
</head>

<body>
    <h1>File Serving</h1>
    <p>Enter the filename of a PDF to serve (e.g., Robotics_club's_research.pdf).</p>
    <form method="get">
        <label for="filename">Filename:</label>
        <input type="text" name="filename" id="filename" value="Robotics_club's_research.pdf" required>
        <button type="submit">Serve File</button>
    </form>

    <?php
    if (isset($_GET['filename'])) {
        $filename = $_GET['filename'];

        if (!file_exists($filename) || !is_file($filename)) {
            http_response_code(404);
            echo "<p style='color: red;'>404 - File not found</p>";
            exit;
        }

        header('Content-Type: application/pdf');
        header('Content-Length: ' . filesize($filename));
        header('Content-Disposition: inline; filename="' . basename($filename) . '"');

        readfile($filename);
        exit;
    }
    ?>
</body>

</html>