<?php

include('Connection.php');

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "
INSERT INTO accounts (gebruikersnaam, wachtwoord)
  VALUES ('$user', '$pass')";


$conn->exec($sql);

