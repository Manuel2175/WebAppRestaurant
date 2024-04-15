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
                    <form method="post" action="winkelmandje-toevoegen.php">
                        <input type="hidden" name="product" value="<?php echo $product['productnaam']; ?>">
                        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                        <button type="submit" class="bestel-nu">Bestel nu</button>
                    </form>
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
<?php
function displayProductId($products)
{
    ?>
    <section class='menu-container-admin'>
        <?php
        foreach ($products as $product) {
            ?>
            <div class='menu-itemss'>
                <div class='product-container'>
                    <h2>
                        <?php echo $product['productnaam']; ?>
                    </h2>
                    <p>Id:
                        <?php echo $product['id']; ?>
                    </p>
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
function displayProductsCard($products)
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
                    <p>Aantal:
                        <?php echo $product['aantal']; ?>
                    </p>
                    <form method="get" action="winkelmandje-delete.php">
                        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                        <button type="submit" class="bestel-nu">verwijder</button>
                    </form>

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
function displayreservering($reserveringen)
{
    ?>
    <section class='menu-container'>
        <?php
        foreach ($reserveringen as $reservering) {
            ?>
            <div class='menu-items'>
                <div class='product-container'>
                    <h2>
                        <?php echo $reservering['naam']; ?>
                    </h2>
                    <p>
                        <?php echo $reservering['datum']; ?>
                    </p>
                    <p>Prijs: €
                        <?php echo $reservering['tijd']; ?>
                    </p>
                    <form method="get" action="reservering-delete.php">
                        <input type="hidden" name="naam" value="<?php echo $reservering['naam']; ?>">
                        <button type="submit" class="bestel-nu">verwijder</button>
                    </form>
                </div>
            </div>
            <?php
        }
        ?>
    </section>
    <?php
}
?>