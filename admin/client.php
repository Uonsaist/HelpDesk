<?php
  session_start();
  require_once '../include/connect.php';

  $result_id = $_GET['id'];
  $result = mysqli_query($connect, "SELECT * FROM `users` WHERE `id`='$result_id'");
  $result = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/rec.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <title>Обновление данных</title>
</head>
<body>
  <?php if(!empty($_SESSION['staff']['first_name'])):?>
  <div class="d-flex flex-column flex-md-row align-items-center p-3
  px-mb-4 mb-3 bg-white border-bottom shadow-sm" >
    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
      <a class="p-2 text-dark text-decoration-none" href="trunk.php" >Главная</a>
    </nav>
  </div>

  <div class="container mt-5">
      <form action="../include/client.php" method="post">
        <h3 >Обновить дынные</h3><br>
        <input type="hidden"  class="form-control" name="id" value="<?= $result['id'] ?>">
        <label>Фамилия</label>
        <input type="text"  class="form-control" name="last_name" value="<?= $result['last_name'] ?>"><br>
        <label>Имя</label>
        <input type="text"  class="form-control" name="first_name" value="<?= $result['first_name'] ?>"><br>
        <label>Логин</label>
        <input type="text"  class="form-control" name="login" value="<?= $result['login'] ?>"><br>
        <label>Пароль</label>
        <input type="text"  class="form-control" name="password" value="<?= $result['password'] ?>"><br>
        <button class="btn btn-primary" type="submit">Обновить</button>
      </form>
    </div>
  <?php else:
    echo '<h3 class="p-2 text-dark text-decoration-none">Отказано</h3>';
    echo '<a href="/" class="btn btn-primary" >На главную</a>';
  ?>
  <?php endif ?>
</body>
</html>
