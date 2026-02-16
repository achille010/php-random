<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown App</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <input type="number" name="number" id="number" min="0" max="1000">
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
        if(isset($_POST["submit"])){
            $num = $_POST["number"];
            COUNTDOWN($num);
        }
        function countDown($num){
            if($num < 0) {
                echo "done";
                return;
            }
            echo "$num ";
            countDown($num - 1);
        }
    ?>
</body>
</html>