<?php

    require "base.php";

    $stmt = $conn->query("SELECT id FROM users ORDER BY id DESC LIMIT 1");
    while ($row = $stmt->fetch()) {
        $id = $row['id'];
    }
    
    $login = $_POST['login'];
    $password = $_POST['password'];
    $user_adres = $id+1;
    
    $user_id = $id+1;
    $city = $_POST['city'];
    $avenue = $_POST['avenue'];
    $place = $_POST['place'];

    if (isset($_POST["login"]) && isset($_POST['password'])) {
        
        $conn->beginTransaction();
        $conn->exec("INSERT INTO users (login, password, user_adres) VALUES ('$login', '$password', '$user_adres')");
        $conn->exec("INSERT INTO user_adres (user_id, city, avenue, place) VALUES ('$user_id', '$city', '$avenue', '$place')");
        $conn->commit();
        
        header("Location: index.php");
    }else{
        header("Location: register_page.php");
        echo "
            <style>
                alert('Coś poszło nie tak!!');
            </style>
        ";
    }
?>

