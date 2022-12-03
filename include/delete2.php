<?php
  require_once 'connect.php';
  $id = $_GET['id'];
  mysqli_query($connect,"DELETE FROM `articles` WHERE `articles`.`id` = '$id'");
  header('Location: ../admin/section.php');
