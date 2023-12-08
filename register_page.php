<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Bella Napolii rejestracja!</title>
</head>
<body>
    <div class="con logcon">
        <a href="index.php" class="log_back">&#10094; Powrót</a>
        <img src="img/delivery_icon.png" class="logo_index">
        <h1 class="text">Zarejestruj się w Pizzeri Bella Napolii!</h1>
        <form action="register_script.php" method="post">
            <input type="text" name="login" class="input" placeholder="Login" required>
            <input type="password" name="password" class="input" placeholder="Hasło" required>
            <!-- <input type="text" name="mail" class="input" placeholder="Mail (Ocjonalnie)"> -->
            <input type="text" name="city" class="input" placeholder="Miasto" required>
            <input type="text" name="avenue" class="input" placeholder="Ul." required>
            <input type="text" name="place" class="input" placeholder="Lokal" required>
            <input type="submit" value="Zarejestruj!" class="button button_reg">
        </form>
    </div>
</body>
</html>