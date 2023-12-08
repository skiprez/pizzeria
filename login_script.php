<?php

    session_start();

    require "base.php";

    $x = $_POST['login'];
    $y = $_POST['password'];

    $_SESSION['login'] = $x;
    $_SESSION['password'] = $y;


    $stmt = $conn->query("SELECT id, login, password FROM users WHERE login='$x'");
    while ($row = $stmt->fetch()) {
        if ($_SESSION['login']==$row['login'] && $_SESSION['password']==$row['password']) {
            $z = $row['id'];
            $_SESSION['id'] = $z;
            header('Location: main.php');
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Something goes wrong...</title>
</head>
<body>
    <div class="con con_wrong">
        <h1 class="text">Coś poszło nie tak!</h1>
        <p class="smalltext">Czy chcesz wrócić do formularza logowania?</p>
        <p class="smalltext">Czy chciałbyś się zarejestrować?</p>
        <input type="submit" value="Zaloguj!" class="button button_login" onclick="index()">
        <input type="submit" value="Zarejestruj!" class="button button_login" onclick="register_page()">
    </div>
</body>
<script src="index.js"></script>
</html>