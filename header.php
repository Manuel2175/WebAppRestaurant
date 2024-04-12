<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<header>
    <img id="nacho" src="img/el_nacho.png" alt="nacho-logo">
    <nav>
        <ul>
            <li>
                <a href="menu.php">
                    <div class="navigatie-knoppen">
                        <h3>Menu</h3>
                    </div>
                </a>
            </li>
            <?php
            session_start();

            // Controleer of de gebruiker is ingelogd
            if (isset($_SESSION['gebruikersnaam'])) {
                // Als de gebruiker is ingelogd, controleer dan of ze de rol "admin" hebben
                if ($_SESSION['rol'] == 'admin' or $_SESSION['rol'] == 'semi-admin') {
            
                    // Als de gebruiker een admin is, toon de knop voor de admin-pagina
                    echo '<li>
                  <a href="admin-page.php">
                      <div class="navigatie-knoppen">
                          <h3>Admin</h3>
                      </div>
                  </a>
              </li>';
                }
            }
            ?>
            <?php
            // Controleer of de gebruiker is ingelogd
            if (!isset($_SESSION['gebruikersnaam'])) {
                echo '  <li>
                <a href="login-page.php">
                    <div class="navigatie-knoppen">
                        <h3>Login</h3>
                    </div>
                </a>
            </li>';
            }
            ?>
            <?php
            // Controleer of de gebruiker is ingelogd
            if (isset($_SESSION['gebruikersnaam'])) {
                echo '<li>
                        <form action="logout.php" method="post">
                        <button type="submit" class="navigatie-knoppen">
                            <h3>Logout</h3>
                        </button>
    
                    </form>
                </li>';
            }
            ?>
            <?php
            // Controleer of de gebruiker is ingelogd
            if (!isset($_SESSION['gebruikersnaam'])) {
                echo '<li>
        <a href="register-page.php">
        <div class="navigatie-knoppen">
            <h3>Register</h3>
        </div>
    </a>
</li>';
            }
            ?>
            <li>
                <a href="reservering.php">
                    <div class="navigatie-knoppen">
                        <h3>Reservering</h3>
                    </div>
                </a>
            </li>
            <li>
                <a href="winkelmandje.php">
                    <div class="navigatie-knoppen">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                </a>
            </li>

        </ul>
    </nav>
</header>


</html>