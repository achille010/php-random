<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Random Apps Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .app-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .app-card {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }

        .app-card h3 {
            margin-top: 0;
        }

        .app-card a {
            text-decoration: none;
            color: #007bff;
        }

        .app-card a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>PHP Random Apps Dashboard</h1>
    <p>Welcome! Click on any app below to interact with it.</p>
    <div class="app-grid">
        <div class="app-card">
            <h3>Array Manipulator</h3>
            <p>Manipulate and sort arrays</p>
            <a href="src/functions/arrays.php">Open App</a>
        </div>
        <div class="app-card">
            <h3>Countdown Timer</h3>
            <p>Countdown from a number</p>
            <a href="src/functions/countDown.php">Open App</a>
        </div>
        <div class="app-card">
            <h3>Number Functions</h3>
            <p>Counter, digit sum, power calculator</p>
            <a href="src/functions/counter.php">Open App</a>
        </div>
        <div class="app-card">
            <h3>Product Inventory</h3>
            <p>Manage product prices and quantities</p>
            <a href="src/functions/drStrange.php">Open App</a>
        </div>
        <div class="app-card">
            <h3>Factorial Calculator</h3>
            <p>Calculate factorials and sequences</p>
            <a href="src/functions/factorial.php">Open App</a>
        </div>
        <div class="app-card">
            <h3>Email Formatter</h3>
            <p>Format and clean email addresses</p>
            <a href="src/functions/formatEmail.php">Open App</a>
        </div>
        <div class="app-card">
            <h3>File Handler</h3>
            <p>Read and write files</p>
            <a href="src/functions/handle.php">Open App</a>
        </div>
        <div class="app-card">
            <h3>File Reader</h3>
            <p>Read file contents with error handling</p>
            <a href="src/functions/handler.php">Open App</a>
        </div>
        <div class="app-card">
            <h3>Exception Demo</h3>
            <p>Demonstrate exception handling</p>
            <a href="src/functions/sample.php">Open App</a>
        </div>
        <div class="app-card">
            <h3>Number Adder</h3>
            <p>Add multiple numbers</p>
            <a href="src/functions/static.php">Open App</a>
        </div>
        <div class="app-card">
            <h3>User Signup</h3>
            <p>Create a new user account</p>
            <a href="signup.html">Open App</a>
        </div>
        <div class="app-card">
            <h3>File Serving</h3>
            <p>Serve PDF files</p>
            <a href="src/functions/ex.php">Open App</a>
        </div>
        <div class="app-card">
            <h3>File Handling Notes</h3>
            <p>Learn about file operations</p>
            <a href="src/functions/fileHandling.php">Open App</a>
        </div>
    </div>
</body>

</html>