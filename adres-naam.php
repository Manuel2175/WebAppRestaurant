<?php

include('Connection.php');

$adres = $_POST['Adres'];
$Name = $_POST['Naam'];

$sql ="
INSERT INTO adres (Adres , Naam)
  VALUES ('$adres', '$Name')";
  $conn -> exec($sql);
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Perform any necessary form processing here

    // Redirect to another webpage 
    header("Location: menu.php");
    exit(); // Ensure that script execution ends here
}


