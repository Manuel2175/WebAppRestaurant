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

<body>

    <?php
    include 'header.php';
    include 'connection.php';
    ?>
    <main>
    <div class="form-container">
     <form action="register.php" method="POST">
        <input class="zoekbalk" name="username" type="text" placeholder="username">
        <input class="zoekbalk" name="password" type="password" placeholder="wachtwoord">
        <input id="submit" type="submit">
     </form>
     </div>
    </main>
    <?php
    include 'footer.php';
    ?>
</body>

</html>