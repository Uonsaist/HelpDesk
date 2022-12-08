<?php
  require_once '../include/connect.php';

  $result_id = $_GET['id'];
  $result = mysqli_query($connect, "SELECT * FROM `articles` WHERE `id`='$result_id'");
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
  <div class="d-flex flex-column flex-md-row align-items-center p-3
  px-mb-4 mb-3 bg-white border-bottom shadow-sm" >
    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
      <a class="p-2 text-dark text-decoration-none" href="section.php" >Главная</a>
    </nav>
  </div>

  <div class="container mt-5">
      <form action="../include/refresh.php" method="post">
        <h3 >Обновить дынные</h3>
        <input type="hidden" class="form-control" name="id" value="<?= $result['id'] ?>"><br>
        <label>Заголовок</label>
        <input type="text" class="form-control" name="header" value="<?= $result['header'] ?>"><br>
        <label>Описание</label>
        <textarea class="form-control" name="description"><?= $result['description'] ?></textarea><br>
        <button class="btn btn-success" type="submit">Обновить</button>
      </form>
    </div>
</body>
</html>
