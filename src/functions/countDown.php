<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        #countdown {
            font-size: 2em;
            color: blue;
        }
    </style>
</head>

<body>
    <h1>Countdown Timer</h1>
    <form onsubmit="startCountdown(); return false;">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" min="0" max="1000" required>
        <button type="submit">Start Countdown</button>
    </form>
    <div id="countdown"></div>

    <script>
        function startCountdown() {
            const num = parseInt(document.getElementById('number').value);
            let current = num;
            const countdownDiv = document.getElementById('countdown');
            countdownDiv.textContent = current;

            const interval = setInterval(() => {
                current--;
                if (current < 0) {
                    countdownDiv.textContent = 'Done!';
                    clearInterval(interval);
                } else {
                    countdownDiv.textContent = current;
                }
            }, 1000);
        }
    </script>
</body>

</html>