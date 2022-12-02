<?php
session_start();
require_once '../include/connect.php';
$result = mysqli_query($connect, "SELECT * FROM `request`");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>админка</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  </head>
  <body>

  <?php require "header1.php" ?>

<div  class="container mt-5">
  <table  width="1000" class="sold">
   <thead>
    <tr>
      <th>№</th>
      <th>Фамилия</th>
      <th>Имя</th>
      <th>Описание</th>
    </tr>
   </thead>
  <tbody>

    <?php
      while ($chart = mysqli_fetch_assoc($result)) {
      ?>
    <tr>
      <td><?php echo $chart['id']; ?></td>
      <td><?php echo $chart['last_name']; ?></td>
      <td><?php echo $chart['first_name']; ?></td>
      <td><?php echo $chart['description']; ?></td>
    </tr>
    <?php
  }
    ?>

  </tbody>
</table>
</div>



  </body>
</html>
