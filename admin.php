<?php
include 'connection.php';

$productnaam = $_POST['productnaam'];
$categorie = $_POST['categorie'];
$beschrijving = addslashes( $_POST['beschrijving']);
$prijs = $_POST['prijs'];
$afbeelding =  $_POST['afbeelding'];
$sql = "INSERT INTO producten (categorie,productnaam, beschrijving, prijs, img) 
VALUES ('".$categorie."','".$productnaam."', '".$beschrijving."', ".$prijs.", '".$afbeelding."')";
$conn->exec($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: menu.php");
}

