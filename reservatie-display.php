<?php
include ('connection.php');

$sql = "SELECT * FROM reservering";
$prepare = $conn->prepare($sql);
$prepare->execute();
$reservering = $prepare->fetchAll();
displayreservering($reservering);