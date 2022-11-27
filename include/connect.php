<?php

    $connect = mysqli_connect('localhost','root','','helpdesk');
    if(!$connect){
      die('Ошибка подключения к БД');
    }

?>
