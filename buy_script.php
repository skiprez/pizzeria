<?php 

    session_start(); 
    require "base.php";

    $pizza = $_SESSION['pizza_name'];
    $user_id = $_SESSION['id'];
    $user_adres = $_SESSION['id'];

    $conn->beginTransaction();
    $conn->exec("INSERT INTO zamowienie (pizza_name, user_id, user_adres) VALUES ('$pizza', '$user_id', '$user_adres')");
    $conn->commit();

    header('Location: main.php');
?>
