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
        <section class="menubalk">
            <nav>
                <ul>
                    <li>
                        <a href="scroll_down.js">
                            <div>
                                <h3>Nacho</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="scroll_down.js">
                            <div>
                                <h3>Taco</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="scroll_down.js">
                            <div>
                                <h3>Ontbijt</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="scroll_down.js">
                            <div>
                                <h3>Drinken</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="scroll_down.js">
                            <div>
                                <h3>Chorros</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="scroll_down.js">
                            <div>
                                <h3>Burrito</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="scroll_down.js">
                            <div>
                                <h3>Vega</h3>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
        <form>
            <input class="zoekbalk" method="GET" type="text" id="searchInput" name="query" placeholder="Zoek product">
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