<?php

include('Connection.php');

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "INSERT INTO accounts (gebruikersnaam, wachtwoord) VALUES (:gebruikersnaam, :wachtwoord)";
$prepare = $conn->prepare($sql);
$prepare->bindParam(':gebruikersnaam', $user);
$prepare->bindParam(':wachtwoord', $pass);
$prepare->execute(); // Execute the prepared statement
header('Location: index.php');
