<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
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
    <div class="container py-4">
        <header class="pb-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <span class="fs-4">О нас</span>
          </a>
        </header>
        <div class="p-5 mb-4 bg-light rounded-3">
          <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">СофиАрт</h1>
            <p class="col-md-8 fs-4">Компания «СофиАрт» — № 1 в мире по производству
              металлочерепицы, стальных кровель и фасадов, водосточных систем из стали. № 1
              в России и странах СНГ по производству сэндвич-панелей и вентилируемых фасадов.
            </p>
          </div>
        </div>

        <div class="row align-items-md-stretch">
          <div class="col-md-6">
            <div class="h-100 p-5 text-bg-dark rounded-3">
              <h2>КАЧЕСТВО И ГАРАНТИЯ</h2>
              <p>Полный контроль качества продукции на каждом этапе производства делает ее наиболее
                конкурентоспособной, что дает возможность компании «СофиАрт» предоставлять письменную
                длительную гарантию на весь ассортимент продукции. Современное оборудование, контроль
                качества входного сырья, выходной контроль готовой продукции, аттестация сотрудников,
                учет отзывов и замечаний потребителей — для компании «СофиАрт» нигде нет мелочей.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
              <h2>МАТЕРИАЛЫ</h2>
              <p>Компания «СофиАрт» изготавливает продукцию только из высококачественных
                материалов (оцинкованная сталь и оцинкованная сталь с полимерным покрытием), которые
                идеально сочетают в себе прочность, долговечность, стойкость к различным погодным условиям.</p>
            </div>
          </div>
        </div>
      </div>
      <?php require "blocks/footer.php" ?>
  </body>
</html>
