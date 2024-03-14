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
</head>

<body id="index">

    <?php
    include 'header.php';
    include 'connection.php';
    ?>
    <main >
        <section class="container">
            <div class="adresbar_vak">
                <form action="adres-naam.php" method="POST">
                    <img id="plaatsmarker" src="img/plaatsmarker.png" alt="plaatsmaker">
                    <input class="input" type="text" name="adres" placeholder="  Bezorgadres">
                    <input class="input" type="text" name="naam" placeholder="  Naam:">
                    <input id="submit" type="submit" value="Submit">
                </form>
            </div>
        </section>

    </main>
    <?php
    include 'landingfooter.php';
    ?>
</body>

</html>