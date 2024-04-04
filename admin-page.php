<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>koop iets</title>
</head>

<body>
    <?php
    include 'header.php';
    include 'connection.php';
    ?>
    <h1>Product toevoegen</h1>
    <form action="toevoegen.php" method="POST">
        <input class="input" type="text" name="categorie" placeholder="categorie gerecht">
        <input class="input" type="text" name="productnaam" placeholder="productnaam">
        <input class="input" type="text" name="beschrijving" placeholder="beschrijving">
        <input class="input" type="text" name="prijs" placeholder="Prijs">
        <input class="input" type="text" name="afbeelding" placeholder="path naar afbeelding">
        <input id="submit" type="submit" value="Submit">
    </form>
    <form action="update.php" method="POST">
        <h1>Product aanpassen</h1>
        <input class="input" type="text" name="categorie" placeholder=" categorie gerecht">
        <input class="input" type="text" name="productnaam" placeholder=" productnaam">
        <input class="input" type="text" name="beschrijving" placeholder=" beschrijving">
        <input class="input" type="text" name="prijs" placeholder=" Prijs">
        <input class="input" type="text" name="afbeelding" placeholder=" path naar afbeelding">
        <input class="input" type="text" name="ids" placeholder=" vul product id in van product dat je wilt verwijderen">
        <input id="submit" type="submit" value="Submit">
        </form>
        <h1>Product verwijderen</h1>
        <form action="verwijder.php" method="GET">
        <input class="input" type="text" name="id" placeholder=" vul product id in van product dat je wilt verwijderen">
        <input id="submit" type="submit" value="Submit">
    </form>
    <form>
            <div id="form-container">
            <input class="zoekbalk" method="GET" type="text" id="searchInput" name="query" placeholder="Zoek product">
            </div>
        </form>
        <div id="searchResults"></div>
        <script>
          <?php
          include 'zoekhulp.js'; 
          ?>
        </script>
        <?php
        include 'menu-items.php';
        ?>

    </main>
    <?php
    include 'footer.php';
    ?>
</body>

</html>