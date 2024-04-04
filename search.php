<?php
include 'connection.php';
include 'display-menu.php';

// Check if the search query is set in the URL
if(isset($_POST['query'])) {
    $search_query = $_POST['query'];

    // Query to fetch relevant products from the database based on the search query
    $sql = "SELECT * FROM producten WHERE productnaam LIKE :search_query OR beschrijving LIKE :search_query ORDER BY (productnaam LIKE :search_query_starts) DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'search_query' => "%$search_query%",
        'search_query_starts' => "$search_query%"
    ]);
    $products = $stmt->fetchAll();

    // Check if products are found
    if ($stmt->rowCount() > 0) {
        // Call the displayProducts function to show the search results
        displayProducts($products);
    } else {
        echo "Geen resultaten gevonden";
    }
}

