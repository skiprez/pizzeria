<?php session_start(); require "base.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Kontakt!</title>
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

    <div class="con_comm">
        <div class="con con_contact_info">
            <h1 class="text">Informacje Kontaktowe!</h1>
            <div class="contact_text">
                <p class="desc_text">tel. 000-000-000</p>
                <p class="desc_text">mail. pizza@pizza.pizza</p>
                <!-- <p class="desc_text">mail.2 pizza@pizza.pl</p> -->
            </div>
            <p class="desc_text">Możesz także skontaktować się z nami za pomocą naszego bota który znajduję się po prawiej stronie aktualnej witryny na której się znajdujesz!</p>
        </div>
        
        <div class="con con_faq">
            <h1 class="text">Informacje o nas!</h1>
            <p class="smalltext text_comm">1. Godziny otwarcia różnią się w zależności od dnia tygodnia. Zazwyczaj jesteśmy otwarci 
            od poniedziałku do niedzieli od 11:00 do 23:00.</p>
            <p class="smalltext text_comm">2. Oferujemy usługę dostawy na terenie miasta. Możesz złożyć zamówienie 
            telefonicznie lub online za pośrednictwem naszej strony internetowej.</p>
            <p class="smalltext text_comm">3. Akceptujemy płatności kartą kredytową. Ponadto, przy dostawie można płacić gotówką.</p>
            <p class="smalltext text_comm">4. Możemy zorganizować catering na przyjęcia i imprezy. Skontaktuj się z nami z wyprzedzeniem, 
            aby omówić szczegóły i dostosować menu do Twoich potrzeb.</p>
            <p class="smalltext text_comm">5. Mamy karty podarunkowe, które można zakupić w restauracji. To doskonały prezent dla miłośników włoskiej kuchni!</p>
            <p class="smalltext text_comm">6. Możesz skontaktować się z nami telefonicznie pod numerem podanym na naszej stronie internetowej lub wysłać e-mail 
            na adres pizza@pizza.pizza Jesteśmy także aktywni na mediach społecznościowych, więc możesz nas śledzić i kontaktować się z nami tam.</p>
            <p class="smalltext text_comm">7. Jesteśmy świadomi różnych potrzeb żywieniowych naszych klientów. Jeśli masz nietolerancję pokarmową, poinformuj 
            nas przy składaniu zamówienia, a postaramy się dostosować potrawy do Twoich wymagań.</p>
        </div>
        
        <div class="con con_chat">
            <h1 class="text">Chat z botem!</h1>
            <h1 class="text">Work In Progres...</h1>
        </div>
    </div>

</body>
<script src="index.js"></script>
</html>