<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Manipulator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .array-item {
            margin: 5px 0;
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
    <h1>Array Manipulator</h1>
    <form method="post">
        <label for="newItem">Add a new item:</label>
        <input type="text" name="newItem" id="newItem" required>
        <button type="submit" name="add">Add Item</button>
    </form>

    <form method="post">
        <button type="submit" name="sort">Sort Array</button>
        <button type="submit" name="clear">Clear Array</button>
    </form>

    <?php
    session_start();
    if (!isset($_SESSION['students'])) {
        $_SESSION['students'] = array("Sandra", "Jyedi", "Brr brr patapim", "Achille", "Cappucinno Assassino");
    }

    if (isset($_POST['add']) && !empty($_POST['newItem'])) {
        array_push($_SESSION['students'], trim($_POST['newItem']));
    }

    if (isset($_POST['sort'])) {
        sort($_SESSION['students']);
    }

    if (isset($_POST['clear'])) {
        $_SESSION['students'] = array();
    }

    echo "<div class='result'><h3>Current Array:</h3><ul>";
    foreach ($_SESSION['students'] as $student) {
        echo "<li class='array-item'>" . htmlspecialchars($student) . "</li>";
    }
    echo "</ul></div>";
    ?>
</body>

</html>