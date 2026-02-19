<?php

$products = array(
    array("name" => "PC", "price" => 1000, "quantity" => 3),
    array("name" => "pen", "price" => 0.25, "quantity" => 1000),
    array("name" => "Book", "price" => 17.99, "quantity" => 37)
);

$totalPrice = 0;

for ($i = 0; $i <= count($products) - 1; $i++) {
    foreach ($products[$i] as $key => $value) {
        echo $key . ": " . $value . "&nbsp;&nbsp;&nbsp;";
        $totalPrice += $products[$i]["price"] * $products[$i]["quantity"];
    }
    echo "<br>";
}

echo "Total inventory Price: $". $totalPrice;
?>