<?php

    session_start();

    require "base.php";

    $pizza = $_SESSION['pizza_name'];

    $stmt = $conn->query("SELECT price FROM pizza WHERE name='$pizza'");
        while ($row = $stmt->fetch()) {
            $price = $row['price'];
        }

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
        <a href="main.php" class="log_back back_buy">&#10094; Powrót</a>
        <h1 class="text">Płatność Kartą!</h1>
        <p class="smalltext"> Do zapłaty: <?php echo $price; ?> </p>
        <form action="buy_script.php" method="post">
            <input type="text" class="input" name="number" placeholder="Numer na karcie" required>
            <input type="text" class="input" name="ccv" placeholder="CCV" required>
            <input type="text" class="input" name="exdate" placeholder="Expire Date" required>
            <input type="submit" class="button" value="Zapłać!" onclick="alert('Dziękujemy za zamówienie!')">
            <input type="submit" class="button" value="Płatność gtówką!" onclick="alert('Dziękujemy za zamówienie!')">
        </form>
    </div>
</body>
</html>