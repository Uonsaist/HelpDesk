<?php
session_start();
require_once '../include/connect.php';
$result = mysqli_query($connect, "SELECT * FROM `users`");
?>
<!DOCTYPE html>
<html lang="en" >
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
            <th>Логин</th>
            <th>Пароль</th>
            <th>&#9998;</th>
            <th>&#10006;</th>
          </tr>
         </thead>
        <tbody>

              <?php
                $result = mysqli_fetch_all($result);
                foreach($result as $claus) {
              ?>
              <tr>
                <td><?= $claus[0] ?></td>
                <td><?= $claus[1] ?></td>
                <td><?= $claus[2] ?></td>
                <td><?= $claus[3] ?></td>
                <td><?= $claus[4] ?></td>
                <td><a href="client.php?id=<?= $claus[0] ?>">Обновить</a></td>
                <td><a href="../include/delete1.php?id=<?= $claus[0] ?>">Удалить</a></td>
              </tr>
              <?php
                }
              ?>

        </tbody>
      </table>
      </div>
        <?php require "foother1.php" ?>
  </body>
</html>
