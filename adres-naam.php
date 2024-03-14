<?php

include 'connection.php';
$adres = $_POST['adres'];
$Name = $_POST['naam'];

$sql ="
INSERT INTO adres (Adres , Naam)
  VALUES ('$adres', '$Name')";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn -> exec($sql);

    header("Location: menu.php"); 
}


