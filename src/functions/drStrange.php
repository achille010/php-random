<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Inventory</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .result {
            font-weight: bold;
            color: green;
        }
    </style>
</head>

<body>
    <h1>Product Inventory</h1>

    <h3>Add New Product</h3>
    <form method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" step="0.01" name="price" id="price" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" required>
        </div>
        <button type="submit" name="addProduct">Add Product</button>
    </form>

    <?php
    session_start();
    if (!isset($_SESSION['products'])) {
        $_SESSION['products'] = array(
            array("name" => "PC", "price" => 1000, "quantity" => 3),
            array("name" => "pen", "price" => 0.25, "quantity" => 1000),
            array("name" => "Book", "price" => 17.99, "quantity" => 37)
        );
    }

    if (isset($_POST['addProduct'])) {
        $newProduct = array(
            "name" => $_POST['name'],
            "price" => (float) $_POST['price'],
            "quantity" => (int) $_POST['quantity']
        );
        array_push($_SESSION['products'], $newProduct);
    }

    $totalPrice = 0;
    echo "<h3>Current Inventory</h3><table><tr><th>Name</th><th>Price</th><th>Quantity</th><th>Total</th></tr>";
    for ($i = 0; $i < count($_SESSION['products']); $i++) {
        $product = $_SESSION['products'][$i];
        $itemTotal = $product["price"] * $product["quantity"];
        $totalPrice += $itemTotal;
        echo "<tr><td>" . htmlspecialchars($product["name"]) . "</td><td>$" . $product["price"] . "</td><td>" . $product["quantity"] . "</td><td>$" . number_format($itemTotal, 2) . "</td></tr>";
    }
    echo "</table>";
    echo "<p class='result'>Total Inventory Price: $" . number_format($totalPrice, 2) . "</p>";
    ?>
</body>

</html>