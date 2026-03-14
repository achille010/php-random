<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .function {
            margin-bottom: 30px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .result {
            font-weight: bold;
            color: green;
        }
    </style>
</head>

<body>
    <h1>Factorial Calculator</h1>

    <div class="function">
        <h3>Factorial</h3>
        <form method="post">
            <label for="factNum">Enter a number (0-170):</label>
            <input type="number" name="factNum" id="factNum" min="0" max="170" required>
            <button type="submit" name="factSubmit">Calculate Factorial</button>
        </form>
        <?php
        if (isset($_POST['factSubmit'])) {
            $num = (int) $_POST['factNum'];
            echo "<p class='result'>Factorial: " . factorial($num) . "</p>";
        }
        ?>
    </div>

    <div class="function">
        <h3>Ascending Sequence</h3>
        <form method="post">
            <label for="ascNum">Enter a number:</label>
            <input type="number" name="ascNum" id="ascNum" required>
            <button type="submit" name="ascSubmit">Generate Sequence</button>
        </form>
        <?php
        if (isset($_POST['ascSubmit'])) {
            $num = (int) $_POST['ascNum'];
            echo "<p class='result'>Sequence: ";
            ascend($num);
            echo "</p>";
        }
        ?>
    </div>

    <div class="function">
        <h3>Descending Even Numbers</h3>
        <form method="post">
            <label for="descNum">Enter a number:</label>
            <input type="number" name="descNum" id="descNum" required>
            <button type="submit" name="descSubmit">Generate Sequence</button>
        </form>
        <?php
        if (isset($_POST['descSubmit'])) {
            $num = (int) $_POST['descNum'];
            echo "<p class='result'>Sequence: ";
            famDown($num);
            echo "</p>";
        }
        ?>
    </div>

    <?php
    function factorial($num)
    {
        if ($num == 0 || $num == 1)
            return 1;
        else
            return $num * factorial($num - 1);
    }

    function ascend($num)
    {
        if ($num == 0)
            return;
        else
            ascend($num - 1);
        echo " $num ";
    }

    function famDown($num)
    {
        $value = $num % 2 == 0 ? $num : $num - 1;
        if ($value < 0)
            return;
        echo " $value ";
        famDown($value - 2);
    }
    ?>
</body>

</html>