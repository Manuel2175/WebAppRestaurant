<?php
include('connection.php');

$naam = $_POST['naam'];
$datum = $_POST['datum'];
$tijd = $_POST['tijd'];

$sql= "INSERT INTO reservering(naam, datum, tijd ) VALUES(:naam, :datum, :tijd)";
$prepare = $conn->prepare($sql);
$prepare->bindParam(':naam',$naam); 
$prepare->bindParam(':datum',$datum); 
$prepare->bindParam(':tijd',$tijd); 
$prepare->execute();

header('Location: reservering.php');

