<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Bella Napolii logowanie!</title>
</head>
<body>
    <div class="con logcon">
        <img src="img/delivery_icon.png" class="logo_index">
        <h1 class="text">Witaj w Pizzeri Bella Napolii!</h1>
        <form action="login_script.php" method="post">
            <input type="text" name="login" class="input" placeholder="Login" >
            <input type="password" name="password" class="input" placeholder="Hasło">
            <input type="submit" value="Zaloguj!" class="button index_button">
        </form>
        <a href="register_page.php" class="reg_link">Zarejestruj!</a>
    </div>
</body>
</html>