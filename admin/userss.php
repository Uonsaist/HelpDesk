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
    <?php if(!empty($_SESSION['staff']['first_name'])):?>
      <div class="d-flex flex-column flex-md-row align-items-center p-3
      px-mb-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">СофиАрт</h5>
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
          <a class="p-2 text-dark text-decoration-none" href="trunk.php">Заявки</a>
          <a class="p-2 text-dark text-decoration-none" href="section.php">Статьи</a>
          <a class="p-2 text-dark text-decoration-none" href="userss.php">Пользователи</a>
        </nav>

        <a href="loggout.php" class="btn btn-primary ">Выход</a>
        <a style="margin: 2px 0;margin-left: 5px;"><?= $_SESSION['staff']['first_name'] ?></a>

    </div>


      <div  class="container mt-5">
        <table  width="1000" class="sold">
         <thead>
          <tr>
            <th>№</th>
            <th>Фамилия</th>
            <th>Логин</th>
            <th>Имя</th>
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
      <?php else:
        echo '<h3 class="p-2 text-dark text-decoration-none">Отказано</h3>';
        echo '<a href="/" class="btn btn-primary" >На главную</a>';
    ?>

    <?php endif ?>
  </body>
</html>
