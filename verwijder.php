<?php 
include 'connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM producten WHERE id =:id";
$prepare =$conn->prepare($sql);
$prepare->bindParam(':id', $id);
$prepare->execute();
header("Location: admin-page.php");