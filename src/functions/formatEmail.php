<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Formatter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .result {
            font-weight: bold;
            color: green;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h1>Email Formatter</h1>
    <p>Enter an email address to format it (remove spaces, lowercase).</p>
    <form method="post">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required>
        <button type="submit" name="format">Format Email</button>
    </form>

    <?php
    if (isset($_POST['format'])) {
        $email = $_POST['email'];
        $formatted = formatEmail($email);
        echo "<p class='result'>Formatted: " . htmlspecialchars($formatted) . "</p>";
    }

    function formatEmail($email)
    {
        $email = strtolower($email);
        $newEmail = preg_replace('/\s+/', '', $email);
        return $newEmail;
    }
    ?>
</body>

</html>