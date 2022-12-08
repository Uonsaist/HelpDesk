<?php
require_once 'connect.php';

$last_name=$_POST['last_name'];
$first_name = $_POST['first_name'];
$login = $_POST['login'];
$password=$_POST['password'];
$id = $_POST['id'];

$password = md5($password);
mysqli_query($connect, "UPDATE `users` SET `last_name` = '$last_name', `login` = '$login', `first_name` = '$first_name', `password` = '$password' WHERE `users`.`id` = '$id'");

 header('Location: ../admin/userss.php');
