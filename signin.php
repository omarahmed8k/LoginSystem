<?php

if (isset($_REQUEST['username'])) {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $users = [];
    $connect__db = mysqli_connect('localhost', 'root', '', 'login-system');
    $read__users = "SELECT * FROM `user`;";
    $show__users = mysqli_query($connect__db, $read__users);

    while ($loop__users = mysqli_fetch_assoc($show__users)) {
        $users[] = $loop__users;
    }

    for ($i = 0; $i <= count($users); $i++) {
        $userShow = $users[$i];
        if ($username ==  $userShow['username']) {
            setcookie('username', $_REQUEST['username'], time() + 84600, '/');
            header('LOCATION: home.php');
            break;
        }
    }
}
