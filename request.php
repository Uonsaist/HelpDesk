<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Help Desk</title>
  </head>
  <body>
    <?php require "blocks/header.php" ?>
    <div class="container mt-5">
      <h3>Задать вопрос</h3><br>
      <form action="include/query.php" method="post">
          <input type="text" name="last_name" placeholder="Введите свою фамилию" class="form-control"><br>
          <input type="text" name="first_name" placeholder="Введите имя" class="form-control"><br>
          <textarea name="description" class="form-control" placeholder="Введите сообщение"></textarea><br>
          <button type="submit" name="send" class="btn btn-primary">Отправить</button>
      </form>
    </div>
    <?php require "blocks/footer.php" ?>
  </body>
</html>
