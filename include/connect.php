<?php

    define('servername','localhost');
    define('username','root');
    define('password','');
    define('dbname','helpdesk');

    $mysql = @new mysqli(servername,username,password,dbname);
    if($mysql->connect_errno) exit('Ошибка подключения к БД');
    $mysql->set_charset('utf8');
?>
