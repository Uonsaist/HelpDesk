<?php
require_once 'include/connect.php';
$result = mysqli_query($connect, "SELECT * FROM `articles`");

session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>СофиАрт</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
  <?php require "blocks/header.php" ?>

  <div class="container mt-5">
    <h3 class="mb-5">Популярные статьи</h3>
      <?php
        while ($articles = mysqli_fetch_assoc($result)) {
          ?>
          <div id="hot" class="bg-light p-3 rounded">
          <h1><?php echo $articles['header']; ?></h1>
          <p class="lead"><?php echo $articles['description']; ?></p>
        </div>
          <?php
        }
      ?>

  </div>
    <?php require "blocks/footer.php" ?>
</body>
</html>
