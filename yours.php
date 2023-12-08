<?php session_start(); require "base.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Pizza Twoja!</title>
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
            <h1 class="text text_b">Skonfiguruj własną pizze!!</h1>
            <div class="slide_buy">
                <img src="img/yours.png" class="pizza_buy img">
                <div class="con ingredients">
                    <h1 class="text" style="margin-bottom: 20px; margin-top: 20px;">Użyj tych składników inne zsotaną zignorowane!</h1>
                    <p class="smalltext">1. sos pomidorowy</p>
                    <p class="smalltext">2. mozzarella</p>
                    <p class="smalltext">3. kapusta kiszona</p>
                    <p class="smalltext">4. podwójna kiełbasa pepperon</p>
                    <p class="smalltext">5. podwójna mozzarella</p>
                    <p class="smalltext">6. pieczarki</p>
                    <p class="smalltext">7. szynka</p>
                    <p class="smalltext">8. papryczki jalapeno</p>
                    <p class="smalltext">9. cebula</p>
                    <p class="smalltext">10. boczek</p>
                    <p class="smalltext">11. sos BBQ</p>
                    <p class="smalltext">12. pieczony kurczak</p>
                    <p class="smalltext">13. ananas</p>
                    <p class="smalltext">14. papryka</p>
                    <p class="smalltext">15. oregano</p>
                    <p class="smalltext">16. ementaler</p>
                </div>

                <div class="inps">
                    <form action="buy_yours.php" method="post">
                    <p class="desc_text text_buy_yours">Nazwa: </p><input type="text" name="nazwa" class="input input_name" required>
                    <p class="desc_text text_buy_yours">Składnik 1: </p><input type="text" name="ingredient_1" class="input input_ingredient1" required placeholder="np.mozzarella">
                    <p class="desc_text text_buy_yours">Składnik 2: </p><input type="text" name="ingredient_2" class="input input_ingredient2" required placeholder="np.szynka">
                    <p class="desc_text text_buy_yours">Składnik 3: </p><input type="text" name="ingredient_3" class="input input_ingredient3" required placeholder="np.cebula">
                </div>
                    <input type="text" style="visibility: hidden;">
                    <input type="submit" class="button button_buy" value="Zakup!">
                    <!-- <?php
                    
                        // $stmt = $conn->query("SELECT id FROM custom_pizza ORDER BY id DESC LIMIT 1");
                        // while ($row = $stmt->fetch()) {
                        //     $id = $row['id'];
                        // }

                        // $pizza_id = $id+1;
                    
                    ?> -->
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