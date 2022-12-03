<?php
  require_once 'connect.php';
  $id = $_GET['id'];
  mysqli_query($connect,"DELETE FROM `request` WHERE `request`.`id` = '$id'");
  header('Location: ../admin/trunk.php');
