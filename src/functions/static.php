<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Adder</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .number-input {
            margin: 5px;
        }

        .result {
            font-weight: bold;
            color: green;
            margin-top: 10px;
        }
    </style>
    <script>
        let inputCount = 1;
        function addInput() {
            inputCount++;
            const container = document.getElementById('inputs');
            const input = document.createElement('input');
            input.type = 'number';
            input.name = 'nums[]';
            input.className = 'number-input';
            input.required = true;
            container.appendChild(input);
        }
    </script>
</head>

<body>
    <h1>Number Adder</h1>
    <p>Add multiple numbers together.</p>
    <form method="post">
        <div id="inputs">
            <input type="number" name="nums[]" class="number-input" required>
        </div>
        <button type="button" onclick="addInput()">Add Another Number</button>
        <button type="submit" name="add">Calculate Sum</button>
    </form>

    <?php
    if (isset($_POST['add'])) {
        $nums = $_POST['nums'];
        $sum = add(...$nums);
        echo "<p class='result'>Sum: " . $sum . "</p>";
    }

    function add(...$nums)
    {
        $total = 0;
        foreach ($nums as $num) {
            $total += (float) $num;
        }
        return $total;
    }
    ?>
</body>

</html>