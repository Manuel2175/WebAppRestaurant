<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner&family=Inter:wght@100..900&family=Lato&display=swap"
        rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <?php
    include 'header.php';
    include 'connection.php';
    ?>
    <main>
        <?php

        if (isset($_SESSION['gebruikersnaam'])) {
            if ($_SESSION['rol'] == 'admin') {
                ?>
                <h1>Rol geven</h1>
                <form action="give-role.php" method="POST">
                    <select class="input" name="gebruikersnaam" id="">
                        <option class="input" value="manuel">manuel</option>
                    </select>
                    <select class="input" name="rol">
                        <option value="admin">admin</option>
                        <option value="semi-admin">semi-admin</option>
                        <option value="klant">klant</option>
                    </select>
                    <input id="submit" type="submit"> <!-- Changed ID to submit1 -->
                </form>
                <?php
            }
        }
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
            <input class="input" type="text" name="ids"
                placeholder=" vul product id in van product dat je wilt verwijderen">
            <input class="input" type="text" name="categorie" placeholder=" categorie gerecht">
            <input class="input" type="text" name="productnaam" placeholder=" productnaam">
            <input class="input" type="text" name="beschrijving" placeholder=" beschrijving">
            <input class="input" type="text" name="prijs" placeholder=" Prijs">
            <input class="input" type="text" name="afbeelding" placeholder=" path naar afbeelding">

            <input id="submit" type="submit" value="Submit">
        </form>
        <h1>Product verwijderen</h1>
        <form action="verwijder.php" method="GET">
            <input class="input" type="text" name="id"
                placeholder=" vul product id in van product dat je wilt verwijderen">
            <input id="submit" type="submit" value="Verwijderen">
        </form>

        <div id="form-container">
            <form action="" method="POST">
                <input class="zoekbalk" type="text" id="searchInput" name="query" placeholder="Zoek product">
            </form>
        </div>
        <div id="searchResults">
            <script>

                <?php
                include 'zoekhulp-admin.js';
                ?>
            </script>
            <?php
            include 'admin-items.php';
            ?>
    </main>
    <?php
    include ('footer.php');
    ?>
</body>

</html>