<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Functions</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .function { margin-bottom: 30px; padding: 15px; border: 1px solid #ddd; border-radius: 5px; }
        .result { font-weight: bold; color: green; }
    </style>
</head>
<body>
    <h1>Number Functions</h1>

    <div class="function">
        <h3>Digit Counter</h3>
        <form method="post">
            <label for="counterNum">Enter a number:</label>
            <input type="number" name="counterNum" id="counterNum" required>
            <button type="submit" name="counterSubmit">Count Digits</button>
        </form>
        <?php
        if (isset($_POST['counterSubmit'])) {
            $num = (int) $_POST['counterNum'];
            echo "<p class='result'>Digits: " . counter($num) . "</p>";
        }
        ?>
    </div>

    <div class="function">
        <h3>Sum of Digits</h3>
        <form method="post">
            <label for="sumNum">Enter a number:</label>
            <input type="number" name="sumNum" id="sumNum" required>
            <button type="submit" name="sumSubmit">Sum Digits</button>
        </form>
        <?php
        if (isset($_POST['sumSubmit'])) {
            $num = (int) $_POST['sumNum'];
            echo "<p class='result'>Sum: " . addDigits($num) . "</p>";
        }
        ?>
    </div>

    <div class="function">
        <h3>Power Calculator</h3>
        <form method="post">
            <label for="base">Base:</label>
            <input type="number" name="base" id="base" required>
            <label for="exponent">Exponent:</label>
            <input type="number" name="exponent" id="exponent" required>
            <button type="submit" name="powerSubmit">Calculate</button>
        </form>
        <?php
        if (isset($_POST['powerSubmit'])) {
            $base = (int) $_POST['base'];
            $exponent = (int) $_POST['exponent'];
            echo "<p class='result'>Result: " . power($base, $exponent) . "</p>";
        }
        ?>
    </div>

    <?php
    function counter($num)
    {
        if ($num == 0)
            return 0;
        return 1 + counter(intdiv($num, 10));
    }

    function addDigits($num)
    {
        if ($num == 0)
            return 0;
        return ($num % 10) + addDigits(intdiv($num, 10));
    }

    function power($base, $exponent)
    {
        if ($exponent == 0)
            return 1;
        return $base * power($base, $exponent - 1);
    }
    ?>
</body>
</html>