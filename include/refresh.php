<?php
require_once 'connect.php';

$header=$_POST['header'];
$description = $_POST['description'];
$id = $_POST['id'];

mysqli_query($connect, "UPDATE `articles` SET `header` = '$header', `description` = '$description' WHERE `articles`.`id` = '$id'");

 header('Location: ../admin/section.php');
