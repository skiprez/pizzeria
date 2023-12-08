<?php

    session_start();

    require "base.php";

    $pizza = $_POST['nazwa'];
    $ingredient_1 = $_POST['ingredient_1'];
    $ingredient_2 = $_POST['ingredient_2'];
    $ingredient_3 = $_POST['ingredient_3'];

    $_SESSION['pizza'] = $pizza;
    $_SESSION['ingredient_1'] = $ingredient_1;
    $_SESSION['ingredient_2'] = $ingredient_2;
    $_SESSION['ingredient_3'] = $ingredient_3;
    
    $stmt = $conn->query("SELECT price FROM ingredients WHERE ingredient='$ingredient_1'");
        while ($row = $stmt->fetch()) {
            $price_1 = $row['price'];
        }

    $stmt = $conn->query("SELECT price FROM ingredients WHERE ingredient='$ingredient_2'");
        while ($row = $stmt->fetch()) {
            $price_2 = $row['price'];
        }

    $stmt = $conn->query("SELECT price FROM ingredients WHERE ingredient='$ingredient_3'");
        while ($row = $stmt->fetch()) {
            $price_3 = $row['price'];
        }

    $user_name = $_SESSION['login'];
    $price_old = $price_1+$price_2+$price_3;
    $price = $price_1+$price_2+$price_3+14;

    $_SESSION['price'] = $price;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Zakup Pizzy!</title>
</head>
<body>
    <div class="con con_buy">
        <a href="yours.php" class="log_back back_buy">&#10094; Powrót</a>
        <h1 class="text">Płatność Kartą!</h1>
        <p class="smalltext">Cena pizzy: <?php echo $price_old; ?>zł + Dostawa: 14zł</p>
        <p class="smalltext">Do zapłaty: <?php echo $price; ?>zł</p>
        <form action="buy_script_yours.php" method="post">
            <input type="text" class="input" name="number" placeholder="Numer na karcie" required>
            <input type="text" class="input" name="ccv" placeholder="CCV" required>
            <input type="text" class="input" name="exdate" placeholder="Expire Date" required>
            <input type="submit" class="button button_yours_buy" value="Zapłać" onclick="alert('Dziękujemy za zamówienie!')">
            <input type="submit" class="button button_yours_buy" value="Płatność gtówką!" onclick="alert('Dziękujemy za zamówienie!')">
        </form>
    </div>
</body>
</html>