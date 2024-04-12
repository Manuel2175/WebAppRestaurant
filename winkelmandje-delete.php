<?php
include ('connection.php');

$product_id = $_GET['product_id'];

var_dump($product_id);


$sql = "DELETE FROM winkelmandje Where id = :id";
$prepare = $conn->prepare($sql);
$prepare->bindParam(':id', $product_id);
$prepare->execute();

header('Location: winkelmandje.php');