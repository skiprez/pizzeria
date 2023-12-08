<?php session_start(); require "base.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Strona Główna!</title>
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
            <p class="smalltext">mail. pizza@pizza.pl</p>
        </div>
    </div>
    
    <div class="main_section">
        <!-- <h1 class="text" id="main_text">Nasza baza Pizz! : </h1> -->
            
            <a class="arrow" id="prevBtn" onclick="currentSlide(-1)">&#10094;</a>
            
            <div class="slide">
                <div class="con slide_element">
                    <img src="img/biesiadna.png" class="pizza img">
                    <p class="desc_text">
                        <?php
                            
                            $stmt = $conn->query("SELECT name, price, opis FROM pizza WHERE id=1");
                            while ($row = $stmt->fetch()) {
                                echo "Nazwa: ".$row['name']."<br>";
                                echo "Price: ".$row['price']."<br>";
                                echo "Opis: ".$row['opis']."<br>";
                            }

                        ?>
                        </p>
                    <button class="button button_main" onclick="pizza1()">Sprawdź ofertę</button>
                </div>
                
                <div class="con slide_element">
                    <img src="img/peperoni.png" class="pizza img">
                    <p class="desc_text">
                        <?php
                            
                            $stmt = $conn->query("SELECT name, price, opis FROM pizza WHERE id=2");
                            while ($row = $stmt->fetch()) {
                                echo "Nazwa: ".$row['name']."<br>";
                                echo "Price: ".$row['price']."<br>";
                                echo "Opis: ".$row['opis']."<br>";
                            }

                        ?>
                    </p>
                    <button class="button button_main" onclick="pizza2()">Sprawdź ofertę</button>
                </div>
                    
                <div class="con slide_element">
                    <img src="img/margherita.png" class="pizza img">
                    <p class="desc_text">
                        <?php
                        
                            $stmt = $conn->query("SELECT name, price, opis FROM pizza WHERE id=3");
                            while ($row = $stmt->fetch()) {
                                echo "Nazwa: ".$row['name']."<br>";
                                echo "Price: ".$row['price']."<br>";
                                echo "Opis: ".$row['opis']."<br>";
                            }
                        
                        ?>
                    </p>
                    <button class="button button_main" onclick="pizza3()">Sprawdź ofertę</button>
                    </div>
            </div>
            
                <div class="slide">
                    <div class="con slide_element">
                    <img src="img/peperoni.png" class="pizza img">
                        <p class="desc_text">
                            <?php
                        
                                $stmt = $conn->query("SELECT name, price, opis FROM pizza WHERE id=2");
                                while ($row = $stmt->fetch()) {
                                    echo "Nazwa: ".$row['name']."<br>";
                                    echo "Price: ".$row['price']."<br>";
                                    echo "Opis: ".$row['opis']."<br>";
                                }
                            ?>
                        </p>
                        <button class="button button_main" onclick="pizza2()">Sprawdź ofertę</button>
                    </div>
                
                    <div class="con slide_element">
                        <img src="img/margherita.png" class="pizza img">
                        <p class="desc_text">
                            <?php
                        
                                $stmt = $conn->query("SELECT name, price, opis FROM pizza WHERE id=3");
                                while ($row = $stmt->fetch()) {
                                    echo "Nazwa: ".$row['name']."<br>";
                                    echo "Price: ".$row['price']."<br>";
                                    echo "Opis: ".$row['opis']."<br>";
                                }

                            ?>
                        </p>
                        <button class="button button_main" onclick="pizza3()">Sprawdź ofertę</button>
                    </div>

                    <div class="con slide_element">
                        <img src="img/capricciosa.png" class="pizza img">
                        <p class="desc_text">
                            <?php

                                $stmt = $conn->query("SELECT name, price, opis FROM pizza WHERE id=4");
                                while ($row = $stmt->fetch()) {
                                    echo "Nazwa: ".$row['name']."<br>";
                                    echo "Price: ".$row['price']."<br>";
                                    echo "Opis: ".$row['opis']."<br>";
                                }

                            ?>
                        </p>
                        <button class="button button_main" onclick="pizza4()">Sprawdź ofertę</button>
                    </div>
                </div>

                <div class="slide">
                    <div class="con slide_element">
                        <img src="img/margherita.png" class="pizza img">
                        <p class="desc_text">
                            <?php
                        
                                $stmt = $conn->query("SELECT name, price, opis FROM pizza WHERE id=3");
                                while ($row = $stmt->fetch()) {
                                    echo "Nazwa: ".$row['name']."<br>";
                                    echo "Price: ".$row['price']."<br>";
                                    echo "Opis: ".$row['opis']."<br>";
                                }

                            ?>
                        </p>
                        <button class="button button_main" onclick="pizza3()">Sprawdź ofertę</button>
                    </div>

                    <div class="con slide_element">
                        <img src="img/capricciosa.png" class="pizza img">
                        <p class="desc_text">
                            <?php
                        
                                $stmt = $conn->query("SELECT name, price, opis FROM pizza WHERE id=4");
                                while ($row = $stmt->fetch()) {
                                    echo "Nazwa: ".$row['name']."<br>";
                                    echo "Price: ".$row['price']."<br>";
                                    echo "Opis: ".$row['opis']."<br>";
                                }

                            ?>
                        </p>
                        <button class="button button_main" onclick="pizza4()">Sprawdź ofertę</button>
                    </div>

                    <div class="con slide_element">
                        <img src="img/diavola.png" class="pizza img">
                        <p class="desc_text">
                            <?php
                        
                                $stmt = $conn->query("SELECT name, price, opis FROM pizza WHERE id=5");
                                while ($row = $stmt->fetch()) {
                                    echo "Nazwa: ".$row['name']."<br>";
                                    echo "Price: ".$row['price']."<br>";
                                    echo "Opis: ".$row['opis']."<br>";
                                }

                            ?>
                        </p>
                        <button class="button button_main" onclick="pizza5()">Sprawdź ofertę</button>
                    </div>
                </div>

                <div class="slide">
                    <div class="con slide_element">
                        <img src="img/capricciosa.png" class="pizza img">
                        <p class="desc_text">
                            <?php
                        
                                $stmt = $conn->query("SELECT name, price, opis FROM pizza WHERE id=4");
                                while ($row = $stmt->fetch()) {
                                    echo "Nazwa: ".$row['name']."<br>";
                                    echo "Price: ".$row['price']."<br>";
                                    echo "Opis: ".$row['opis']."<br>";
                                }

                            ?>
                        </p>
                        <button class="button button_main" onclick="pizza4()">Sprawdź ofertę</button>
                    </div>

                    <div class="con slide_element">
                        <img src="img/diavola.png" class="pizza img">
                        <p class="desc_text">
                            <?php

                                $stmt = $conn->query("SELECT name, price, opis FROM pizza WHERE id=5");
                                while ($row = $stmt->fetch()) {
                                    echo "Nazwa: ".$row['name']."<br>";
                                    echo "Price: ".$row['price']."<br>";
                                    echo "Opis: ".$row['opis']."<br>";
                                }

                            ?>
                        </p>
                        <button class="button button_main" onclick="pizza5()">Sprawdź ofertę</button>
                    </div>

                    <div class="con slide_element">
                        <img src="img/yours.png" class="pizza img">
                        <p class="desc_text">
                            <?php
                        
                                $stmt = $conn->query("SELECT name, price, opis FROM pizza WHERE id=6");
                                while ($row = $stmt->fetch()) {
                                    echo "Nazwa: ".$row['name']."<br>";
                                    echo "Price: ".$row['price']."<br>";
                                    echo "Opis: ".$row['opis']."<br>";
                                }

                            ?>
                        </p>
                        <button class="button button_main" onclick="pizza6()">Sprawdź ofertę</button>
                    </div>
                </div>

                <div class="slide">
                    <div class="con slide_element">
                        <img src="img/diavola.png" class="pizza img">
                        <p class="desc_text">
                            <?php
                        
                                $stmt = $conn->query("SELECT name, price, opis FROM pizza WHERE id=5");
                                while ($row = $stmt->fetch()) {
                                    echo "Nazwa: ".$row['name']."<br>";
                                    echo "Price: ".$row['price']."<br>";
                                    echo "Opis: ".$row['opis']."<br>";
                                }

                            ?>
                        </p>
                        <button class="button button_main" onclick="pizza5()">Sprawdź ofertę</button>
                    </div>

                    <div class="con slide_element">
                        <img src="img/yours.png" class="pizza img">
                        <p class="desc_text">
                            <?php
                        
                                $stmt = $conn->query("SELECT name, price, opis FROM pizza WHERE id=6");
                                while ($row = $stmt->fetch()) {
                                    echo "Nazwa: ".$row['name']."<br>";
                                    echo "Price: ".$row['price']."<br>";
                                    echo "Opis: ".$row['opis']."<br>";
                                }

                            ?>
                        </p>
                        <button class="button button_main" onclick="pizza6()">Sprawdź ofertę</button>
                    </div>

                    <div class="con slide_element">
                        <img src="img/biesiadna.png" class="pizza img">
                        <p class="desc_text">
                            <?php
                        
                                $stmt = $conn->query("SELECT name, price, opis FROM pizza WHERE id=1");
                                while ($row = $stmt->fetch()) {
                                    echo "Nazwa: ".$row['name']."<br>";
                                    echo "Price: ".$row['price']."<br>";
                                    echo "Opis: ".$row['opis']."<br>";
                                }

                            ?>
                        </p>
                        <button class="button button_main" onclick="pizza1()">Sprawdź ofertę</button>
                    </div>
                </div>

                <div class="slide">
                    <div class="con slide_element">
                        <img src="img/yours.png" class="pizza img">
                        <p class="desc_text">
                            <?php
                        
                                $stmt = $conn->query("SELECT name, price, opis FROM pizza WHERE id=6");
                                while ($row = $stmt->fetch()) {
                                    echo "Nazwa: ".$row['name']."<br>";
                                    echo "Price: ".$row['price']."<br>";
                                    echo "Opis: ".$row['opis']."<br>";
                                }

                            ?>
                        </p>
                        <button class="button button_main" onclick="pizza6()">Sprawdź ofertę</button>
                    </div>

                    <div class="con slide_element">
                        <img src="img/biesiadna.png" class="pizza img">
                        <p class="desc_text">
                            <?php
                        
                                $stmt = $conn->query("SELECT name, price, opis FROM pizza WHERE id=1");
                                while ($row = $stmt->fetch()) {
                                    echo "Nazwa: ".$row['name']."<br>";
                                    echo "Price: ".$row['price']."<br>";
                                    echo "Opis: ".$row['opis']."<br>";
                                }

                            ?>
                        </p>
                        <button class="button button_main" onclick="pizza1()">Sprawdź ofertę</button>
                    </div>

                    <div class="con slide_element">
                        <img src="img/peperoni.png" class="pizza img">
                        <p class="desc_text">
                            <?php
                        
                                $stmt = $conn->query("SELECT name, price, opis FROM pizza WHERE id=2");
                                while ($row = $stmt->fetch()) {
                                    echo "Nazwa: ".$row['name']."<br>";
                                    echo "Price: ".$row['price']."<br>";
                                    echo "Opis: ".$row['opis']."<br>";
                                }

                            ?>
                        </p>
                        <button class="button button_main" onclick="pizza2()">Sprawdź ofertę</button>
                    </div>
                </div>
        <a class="arrow r" id="nextBtn" onclick="currentSlide(1)">&#10095;</a>
    </div>
    
    <div class="footer_section">
        <?php

            error_reporting(E_ERROR | E_PARSE);

            $id = $_SESSION['id'];
            $login = $_SESSION['login'];
            $password = $_SESSION['password'];

            $stmt = $conn->query("SELECT login_p, password_p, user_id FROM pracownik WHERE user_id=$id");
            while ($row = $stmt->fetch()) {
                $id_user = $row['user_id'];
                $login_p = $row['login_p'];
                $password_p = $row['password_p'];
                $_SESSION['login_p'] = $login_p;
                $_SESSION['password_p'] = $password_p;
                $_SESSION['id_user'] = $id_user;
            }


            if($id == $id_user) {
                echo '
                    <div class="worker" onclick="employee_panel()">
                        <img src="img/employee_unlocked.png" class="img worker_img">
                    </div>
                    <p class="smalltext">Copyright &copy; Pizza 2023-2023</p>
                ';
            }else{
                echo'
                    <div class="worker" onclick="alert(`Nie jesteś pracownikiem!`)">
                        <img src="img/employee_locked.png" class="img worker_img">
                    </div>
                    <p class="smalltext">Copyright &copy; Pizza 2023-2023</p>
                ';
            }
        
        ?>
    </div>

</body>
<script src="index.js"></script>
</html>