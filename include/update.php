<?php
require_once 'connect.php';

$last_name=$_POST['last_name'];
$first_name = $_POST['first_name'];
$description = $_POST['description'];
$id = $_POST['id'];

mysqli_query($connect, "UPDATE `request` SET `last_name` = '$last_name', `first_name` = '$first_name', `description` = '$description' WHERE `request`.`id` = '$id'");

 header('Location: ../admin/trunk.php');
