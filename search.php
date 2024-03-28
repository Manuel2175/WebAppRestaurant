<?php
include 'connection.php';
include 'display-menu.php';
// Check if the search query is set in the URL
if(isset($_POST['query'])) {
    $search_query = $_POST['query'];

    // Query om de relevante producten uit de database te halen
    $sql = "SELECT * FROM producten WHERE productnaam LIKE '%$search_query%' ORDER BY (productnaam LIKE '$search_query%') DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll();

    if ($stmt->rowCount() > 0) {
        displayProducts($products);
    } else {
        echo "Geen resultaten gevonden";
    }
    
}

    