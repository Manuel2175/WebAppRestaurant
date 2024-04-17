<?php
// Include the database connection file
include 'connection.php';

// Retrieve form dataupdate.php
$afbeelding = $_POST['afbeelding'];
$id = $_POST['id'];

// Prepare the SQL statement
$sql = "UPDATE producten SET  img = :afbeelding WHERE id = :id";
$prepare = $conn->prepare($sql);

// Bind parameters
$prepare->bindParam(':id', $id);
$prepare->bindParam(':afbeelding', $afbeelding);

// Execute the SQL statement
$result = $prepare->execute();

// Redirect to admin page after update
header("Location: admin-page.php");

