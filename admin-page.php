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
    <form action="admin.php" method="POST">
        <input class="input" type="text" name="categorie" placeholder=" categorie gerecht">
        <input class="input" type="text" name="productnaam" placeholder=" productnaam">
        <input class="input" type="text" name="beschrijving" placeholder=" beschrijving">
        <input class="input" type="text" name="prijs" placeholder=" Prijs">
        <input class="input" type="text" name="afbeelding" placeholder=" path naar afbeelding">
        <input id="submit" type="submit" value="Submit">
    </form>
    <?php
    include 'footer.php';
    ?>

</body>

</html>