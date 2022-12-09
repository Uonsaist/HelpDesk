<?php
    require_once 'connect.php';

    $header=$_POST['header'];
    $description = $_POST['description'];


    mysqli_query($connect, "INSERT INTO `articles` ( `header`, `description`)
    VALUES ( '$header', '$description')");
    header('Location: ../admin/section.php');




?>
