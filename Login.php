<?php
session_start();
include 'connection.php';

$gebruikersnaam = $_POST['username'];
$wachtwoord = $_POST['password'];

$query = $conn->prepare("SELECT * FROM accounts WHERE gebruikersnaam = :gebruikersnaam AND wachtwoord = :wachtwoord");
$query->bindParam(':gebruikersnaam', $gebruikersnaam);
$query->bindParam(':wachtwoord', $wachtwoord);
$query->execute();
$user = $query->fetch(PDO::FETCH_ASSOC);

if ($user) {
    $_SESSION['gebruikersnaam'] = $gebruikersnaam;
    $_SESSION['rol'] = $user['rol'];

    if ($user['rol'] == 'admin') {
        header('Location: admin-page.php');
        exit();
    } else {
        header('Location: index.php');
        exit();
    }
} else {
    $_SESSION['error'] = "Ongeldige inloggegevens!";
    header('Location: login-page.php');
    exit();
}



