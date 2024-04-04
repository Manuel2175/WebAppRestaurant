<?php
include 'connection.php';

$productnaam = $_POST['productnaam'];
$categorie = $_POST['categorie'];
$beschrijving = addslashes( $_POST['beschrijving']);
$prijs = $_POST['prijs'];
$afbeelding =  $_POST['afbeelding'];
$sql = "INSERT INTO producten (categorie,productnaam, beschrijving, prijs, img) VALUES (:categorie,:productnaam, :beschrijving, :prijs, :afbeelding)";
$prepare = $conn->prepare($sql);
$prepare->bindParam(':categorie', $categorie );
$prepare->bindParam(':productnaam', $productnaam );
$prepare->bindParam(':beschrijving', $beschrijving );
$prepare->bindParam(':prijs', $prijs );
$prepare->bindParam(':afbeelding', $afbeelding );
$test = $prepare->execute();


    header("Location: admin-page.php");
