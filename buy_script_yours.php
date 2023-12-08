<?php 

    session_start(); 
    require "base.php";

    $id = $_SESSION['id'];
    $pizza = $_SESSION['pizza'];
    $ingredient_1 = $_SESSION['ingredient_1'];
    $ingredient_2 = $_SESSION['ingredient_2'];
    $ingredient_3 = $_SESSION['ingredient_3'];
    $user_name = $_SESSION['login'];
    $price = $_SESSION['price'];

    $conn->beginTransaction();
    $conn->exec("INSERT INTO zamowienie (pizza_name, user_id, user_adres) VALUES ('$pizza', '$id', '$id')");
    $conn->exec("INSERT INTO custom_pizza (name, ingredient_1, ingredient_2, ingredient_3, price, creator) VALUES ('$pizza', '$ingredient_1', '$ingredient_2', '$ingredient_3', '$price', '$user_name')");
    $conn->commit();

    header('Location: main.php');
?>
