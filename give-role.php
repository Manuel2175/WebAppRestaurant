<?php
include ('connection.php');
$user = $_POST['gebruikersnaam'];
$rol = $_POST['rol'];

$sql = "UPDATE accounts SET rol = :rol WHERE gebruikersnaam = :gebruikersnaam ";
$prepare = $conn->prepare($sql);

$prepare->bindParam(':rol',$rol);
$prepare->bindParam(':gebruikersnaam',$user);

$result = $prepare->execute();

header("Location: admin-page.php");