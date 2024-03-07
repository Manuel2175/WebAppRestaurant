<html>
<head>
    <title>

    </title>
    <link rel="stylesheet" href="css/style.css"

<body>
<?php
include('Connection.php')
?>

<h1>LOGIN!</h1>
<form action="register.php" method ="POST">
    <input type="text" name="username" placeholder="Fill in your username">
    <input type="password" name="password" placeholder="Fill in your password">
    <input type="submit">
</form>

<h1>Login!</h1>
<form action="register.php" method ="GET">
    <input type="text" name="username" placeholder="Fill in your username">
    <input type="password" name="password" placeholder="Fill in your password">
    <input type="submit">
</form>
</body>

</head>
</html>