<?php
$productnaam = $_POST['productnaam'];
$beschrijving = $_POST['beschrijving'];
$prijs = $_POST['prijs'];
$dressing = $_POST['dressing'];
$alergenen = $_POST['allergenen'];

$sql = "INSERT INTO producten (id, productnaam, beschrijving, prijs, dressing, allergenen)\n"

    . "VALUES (0, '$productnaam','$beschrijving','$prijs','$dressing' ,'$allergenen');";
    $conn -> exec($sql);
