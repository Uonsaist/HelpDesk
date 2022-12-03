<?php
  require_once '../include/connect.php';

  $result_id = $_GET['id'];
  $result = mysqli_query($connect, "SELECT * FROM `request` WHERE `id`='$result_id'");
  $result = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/rec.css">
  <title>Обновление данных</title>
</head>
<body>

  <a href="trunk.php">Главная</a>
  <hr>

  <h2>Обновить дынные</h2>
  <form action="../include/update.php" method="post">
    <input type="hidden" name="id" value="<?= $result['id'] ?>">
    <p>Фамилия</p>
    <input type="text" name="last_name" value="<?= $result['last_name'] ?>">
    <p>Имя</p>
    <input type="text" name="first_name" value="<?= $result['first_name'] ?>">
    <p>Описание</p>
    <textarea name="description"><?= $result['description'] ?></textarea>
    <button type="submit">Обновить</button>
  </form>

</body>
</html>
