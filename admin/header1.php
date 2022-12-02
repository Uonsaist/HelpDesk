<?php if(!empty($_SESSION['staff']['first_name'])):?>
  <div class="d-flex flex-column flex-md-row align-items-center p-3
  px-mb-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">СофиАрт</h5>
    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
      <a class="p-2 text-dark text-decoration-none" href="">Главная</a>
    </nav>

    <a href="loggout.php" class="btn btn-primary ">Выход</a>
    <a style="margin: 2px 0;margin-left: 5px;"><?= $_SESSION['staff']['first_name'] ?></a>
    <?php else:
      echo '<h3 class="p-2 text-dark text-decoration-none">Отказано</h3>';
      echo '<a href="/" class="btn btn-primary" >На главную</a>';
  ?>

  <?php endif ?>
</div>
