<?php

    session_start();
    require_once 'connect.php';

    $last_name=$_POST['last_name'];
    $first_name = $_POST['first_name'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

        $password = md5($password);
        mysqli_query($connect, "INSERT INTO `users` (`id`, `last_name`, `login`, `first_name`, `password`)
        VALUES (NULL, '$last_name', '$login', '$first_name', '$password')");
        header('Location: ../index.php');


    } else {
        header('Location: ../register.php');
    }

?>
