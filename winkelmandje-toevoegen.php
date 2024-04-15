<?php
include ('connection.php');

// Retrieve data from the form
$product_id = $_POST['product_id'];

// Fetch product details based on product_id
$sql = "SELECT * FROM producten WHERE id = :product_id";
$prepare = $conn->prepare($sql);
$prepare->bindParam(':product_id', $product_id);
$prepare->execute();
$product = $prepare->fetch();

// Check if the product already exists in the winkelmandje
$sql_check = "SELECT * FROM winkelmandje WHERE id = :id";
$prepare_check = $conn->prepare($sql_check);
$prepare_check->bindParam(':id', $product_id);
$prepare_check->execute();

if ($prepare_check->rowCount() > 0) {
    // If the product already exists, increment the 'aantal' column by 1
    $sql_update = "UPDATE winkelmandje SET aantal = aantal + 1 WHERE id = :id";
    $prepare_update = $conn->prepare($sql_update);
    $prepare_update->bindParam(':id', $product_id);
    $prepare_update->execute();
} else {
    // If the product doesn't exist, insert a new row
    $sql_insert = "INSERT INTO winkelmandje (productnaam, beschrijving, prijs, id, aantal,img) VALUES (:productnaam, :beschrijving, :prijs, :id, 1,:img)";
    $prepare_insert = $conn->prepare($sql_insert);
    $prepare_insert->bindParam(':productnaam', $product['productnaam']);
    $prepare_insert->bindParam(':beschrijving', $product['beschrijving']);
    $prepare_insert->bindParam(':prijs', $product['prijs']);
    $prepare_insert->bindParam(':id', $product_id);
    $prepare_insert->bindParam(':img', $product['img']);
    $prepare_insert->execute();
}

header('Location: menu.php');

