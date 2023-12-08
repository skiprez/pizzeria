<?php session_start(); require "base.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Pizza Biesiadna!</title>
</head>
<body>
    <div class="header_section">
        <img src="img/logo.png" class="logo_img img" onclick="main()">
        <div class="logo" onclick="main()">
            <h1 class="text">Pizzera Bella Napoli!</h1>
            <h1 class="text">Witaj <?php echo $_SESSION['login']; ?>!</h1>
        </div>
        <img src="img/local.png" class="local img" onclick="local()">
        <div class="localisation" onclick="local()">
            <!-- link - https://www.google.com/maps/@-18.1964246,-38.5285951,3a,75y,280.58h,125.49t/data=!3m8!1e1!3m6!1sAF1QipOmujCnJOac3AnuKCFWJn-BjXlCuml-seqdk9hs!2e10!3e11!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipOmujCnJOac3AnuKCFWJn-BjXlCuml-seqdk9hs%3Dw203-h100-k-no-pi-1.302976-ya44.550728-ro5.6268826-fo100!7i5376!8i2688?entry=ttu -->
            <p class="smalltext">Tu znajdziesz nas stacjonarnie!</p>
            <p class="smalltext">-18.1964246, -38.5285951</p>
        </div>
        <img src="img/comm.png" class="comm img" onclick="comm()">
        <div class="contact" onclick="comm()">
            <p class="smalltext">tel. 000-000-000</p>
            <p class="smalltext">mail. pizza@pizza.pizza</p>
        </div>
    </div>

    <div class="main_section">            
        <div class="slide">
            <div class="slide_buy">
                <img src="img/biesiadna.png" class="pizza_buy img">
                <p class="desc_text text_buy">
                    <?php
                        
                        $stmt = $conn->query("SELECT name, price, opis, ingredients FROM pizza INNER JOIN pizza_ingredients ON pizza_ingredients.id = pizza.ingredient WHERE pizza.id=1");
                        while ($row = $stmt->fetch()) {
                            $_SESSION['pizza_name'] = $row['name'];
                            $_SESSION['pizza_price'] = $row['price'];
                            $_SESSION['pizza_ingredients'] = $row['ingredients'];
                            echo "Nazwa: ".$row['name']."<br>";
                            echo "Price: ".$row['price']."<br>";
                            echo "Składniki: ".$row['ingredients']."<br>";
                            echo "Opis: ".$row['opis']."<br>";
                        }

                    ?>
                    </p>
                    <form action="buy.php" method="post">
                        <input type="text" value="1" style="visibility: hidden;">
                        <input type="submit" class="button button_buy" value="Zakup!">
                    </form>
            </div>
        </div>        
    </div>

    <div class="footer_section">
        <p class="smalltext">Copyright &copy; Pizza 2023-2023</p>
    </div>
</body>
<script src="index.js"></script>
</html>