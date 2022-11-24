<?php

    $connect= mysqli_connect('localhost','root','','helpdesk');
    //<--helpDesk-->
    if (!$connect){
        die('error connect to database');
    }
