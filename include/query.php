<<?php

    session_start();
    require_once 'connect.php';

    $last_name=$_POST['last_name'];
    $first_name = $_POST['first_name'];
    $description = $_POST['description'];

    mysqli_query($connect,"INSERT INTO `request` (`id`, `last_name`, `first_name`, `description`, `user_id`)
    VALUES (NULL, '$last_name', '$first_name', '$description', NULL)");
    header('Location: ../request.php');

 ?>
