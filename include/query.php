<<?php
    session_start();
    require_once 'connect.php';

    $last_name=$_POST['last_name'];
    $first_name = $_POST['first_name'];
    $description = $_POST['description'];

    $mysql="INSERT INTO `request` (`id`, `last_name`, `first_name`, `description` )
    VALUES (NULL, '$last_name', '$first_name', '$description')";

    header('Location: ../request.php');

 ?>
