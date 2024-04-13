<?php
include ('connection.php');
$naam = $_GET['naam'];

$sql = "DELETE FROM reservering WHERE naam = :naam";
$prepare = $conn->prepare($sql);
$prepare->bindParam(':naam',$naam);
$prepare->execute();