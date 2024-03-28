<?php
function displayProductsAndCategories($products)
{
    $displayedCategories = array();

    foreach ($products as $product) {
        $categorie = $product['categorie'];

        // Check if the category has already been displayed
        if (!in_array($categorie, $displayedCategories)) {
            ?>
            <h1 class='categorie'>
                <?php echo $categorie; ?>
            </h1>
            <?php
            $displayedCategories[] = $categorie; // Add the category to the displayed categories array
        }
    }
    ?>
    <section class='menu-container'>
        <?php
        foreach ($products as $product) {
            ?>
            <div class='menu-items'>
                <img class='product-img' src='<?php echo $product['img']; ?>' alt='<?php echo $product['productnaam']; ?>'
                    style='max-width: 400px;'>
                <div class='product-container'>
                    <h2>
                        <?php echo $product['productnaam']; ?>
                    </h2>
                    <p>
                        <?php echo $product['beschrijving']; ?>
                    </p>
                    <p>Prijs: €
                        <?php echo $product['prijs']; ?>
                    </p>
                    <a class='bestel-knop' href='index.php'>
                        <div class='bestel-nu'>
                            <p>Bestel nu</p>
                        </div>
                    </a>
                </div>
            </div>
            <?php
        }
        ?>
    </section>
    <?php
}
?>
<?php
function displayProducts($products)
{ 
    ?>
    <section class='menu-container'>
        <?php
        foreach ($products as $product) {
            ?>
            <div class='menu-items'>
                <img class='product-img' src='<?php echo $product['img']; ?>' alt='<?php echo $product['productnaam']; ?>'
                    style='max-width: 400px;'>
                <div class='product-container'>
                    <h2>
                        <?php echo $product['productnaam']; ?>
                    </h2>
                    <p>
                        <?php echo $product['beschrijving']; ?>
                    </p>
                    <p>Prijs: €
                        <?php echo $product['prijs']; ?>
                    </p>
                    <a class='bestel-knop' href='index.php'>
                        <div class='bestel-nu'>
                            <p>Bestel nu</p>
                        </div>
                    </a>
                </div>
            </div>
            <?php
        }
        ?>
    </section>
    <?php
}
?>
