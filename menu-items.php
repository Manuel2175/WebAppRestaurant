<?php
include 'connection.php';
include 'display-menu.php';

// Haal alle categorieën op
$sql = "SELECT DISTINCT categorie FROM producten";
$stmt = $conn->prepare($sql);
$stmt->execute();
$categories = $stmt->fetchAll();

// Loop door elke categorie en haal de producten op en toon ze
foreach ($categories as $category) {
    $sql = "SELECT * FROM producten WHERE categorie = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$category['categorie']]);
    $products = $stmt->fetchAll();
    
    // Toon de producten en categorieën
    displayProductsAndCategories($products);
}

