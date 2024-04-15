<?php
include 'connection.php';
include 'display-menu.php';

// Fetch all products from the 'winkelmandje' table
$sql = "SELECT * FROM winkelmandje";
$stmt = $conn->prepare($sql);
$stmt->execute();
$cart_items = $stmt->fetchAll();

// Display the products from the shopping cart
displayProductsCard($cart_items);
