<?php session_start(); require "base.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Zamówienia!</title>
</head>
<body>
    <div class="header_section">
        <img src="img/logo.png" class="logo_img img" onclick="main()">
        <div class="logo" onclick="main()">
            <h1 class="text">Witaj <?php echo $_SESSION['login']; ?>!</h1>
            <h1 class="text">Twój Panel Zamówień!</h1>
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
            <p class="smalltext">mail. pizza@pizza.pl</p>
        </div>
    </div>

    <div class="con orders_con">
        <a href="employee_panel.php" class="log_back back_s">&#10094; Powrót</a>
        <p class="orders_text">
        <?php

            $date = $_POST['date'];
            $_SESSION['date'] = $date;
            // $_SESSION['id'] = $id;
            
            $stmt = $conn->query("SELECT zamowienie.pizza_name, users.login, user_adres.city, user_adres.avenue, user_adres.place FROM zamowienie 
            INNER JOIN users ON users.id = zamowienie.user_id
            INNER JOIN user_adres ON user_adres.user_id = zamowienie.user_id
            WHERE data = '$date'");
                    echo 'Zamówienia z dnia: '."$date"."<br>"."<br>";
                    while ($row = $stmt->fetch()) {
                        // $_SESSION['pizzaname'] = $row['pizza_name'];
                        // $_SESSION['login'] = $row['login'];
                        // $_SESSION['city'] = $row['city'];
                        // $_SESSION['avenue'] = $row['avenue'];
                        // $_SESSION['place'] = $row['place'];
                        
                        echo 'Nazwa Pizzy: '.$row['pizza_name']."<br>";
                        echo 'Zamawiający: '.$row['login']."<br>";
                        echo 'Misto: '.$row['city']."<br>";
                        echo 'Ulica: '.$row['avenue']."<br>";
                        echo 'Nr. Mieszkania: '.$row['place']."<br>"."<br>";

                        // header('Location: employee_panel.php');
                    }


        ?>
        </p>
    </div>
    
    <div class="footer_section">
        <p class="smalltext">Copyright &copy; Pizza 2023-2023</p>
    </div>
</body>
</html>