<?php
session_start();



// Vernietig de sessie
session_unset(); // Verwijder alle sessievariabelen
session_destroy(); // Vernietig de sessie zelf

// Controleer of de sessie vernietigd is
if(!isset($_SESSION['gebruikersnaam'])) {
echo("succesvol uitgelogd");
} else {
    echo 'Kon niet uitloggen';
}
header("Location: index.php");
