<?php 
include 'connection.php';
 $productnaam = $_POST['productnaam'];
 $categorie = $_POST['categorie'];
 $beschrijving = addslashes($_POST['beschrijving']);
 $prijs = $_POST['prijs'];
 $afbeelding = $_POST['afbeelding'];
 $id = $_POST['ids']; // Change to POST instead of GET

 // Prepare the SQL statement
 $sql = "UPDATE producten SET categorie = :categorie, productnaam = :productnaam, beschrijving = :beschrijving, prijs = :prijs, img = :afbeelding WHERE id = :id";
 $prepare = $conn->prepare($sql);

 // Bind parameters
 $prepare->bindParam(':id', $id);
 $prepare->bindParam(':categorie', $categorie);
 $prepare->bindParam(':productnaam', $productnaam);
 $prepare->bindParam(':beschrijving', $beschrijving);
 $prepare->bindParam(':prijs', $prijs);
 $prepare->bindParam(':afbeelding', $afbeelding);

 // Execute the SQL statement
 $result = $prepare->execute();
 header("Location: admin-page.php");
