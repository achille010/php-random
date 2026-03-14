<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exception Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Exception Demo</h1>
    <p>Enter a number. If > 1, it will throw an exception.</p>
    <form method="post">
        <label for="num">Number:</label>
        <input type="number" name="num" id="num" required>
        <button type="submit" name="check">Check Number</button>
    </form>

    <?php
    if (isset($_POST['check'])) {
        $num = (int) $_POST['num'];
        try {
            checkNum($num);
            echo "<p class='success'>The number is valid!</p>";
        } catch (Exception $e) {
            echo "<p class='error'>Exception: " . htmlspecialchars($e->getMessage()) . "</p>";
        }
    }

    function checkNum($num)
    {
        if ($num > 1) {
            throw new Exception("Your number is greater than 1");
        }
        return true;
    }
    ?>
</body>

</html>