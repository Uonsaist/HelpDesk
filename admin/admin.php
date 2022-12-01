<?php

    session_start();
    require_once '../include/connect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];

    $check_user = mysqli_query( $connect, "SELECT * FROM `staff` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $staff = mysqli_fetch_assoc($check_user);

        $_SESSION['staff'] = [
            "id" => $staff['id'],
            "first_name" => $staff['first_name']
        ];

        header('Location: trunk.php');

    } else {
        header('Location: slave.php');
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($staff);
    ?>
</pre>
