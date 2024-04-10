<?php
include 'connection.php';
include 'display-menu.php';


    $search_query = $_POST['query'];
    // Query to fetch relevant products from the database based on the search query
    $sql = "SELECT * FROM producten WHERE productnaam LIKE :search_query OR  id LIKE :search_query ORDER BY (productnaam LIKE :search_query_starts) DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'search_query' => "%$search_query%",
        'search_query_starts' => "$search_query%"
    ]);
    $products = $stmt->fetchAll();

    // Check if products are found
    if ($stmt->rowCount() > 0) {
        displayProductId($products);
    } else {
        echo "Geen resultaten gevonden";
    }

