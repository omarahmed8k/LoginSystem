<?php

if (isset($_REQUEST['username'])) {
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $connect__db = mysqli_connect('localhost', 'root', '', 'login-system');
    $read__users = "INSERT INTO `user`(`username`, `email`, `password`) VALUES ('$username','$email','$password') ";

    mysqli_query($connect__db, $read__users);

    setcookie('username', $_REQUEST['username'], time() + 84600, '/');

    header('LOCATION: home.php');
} else {

    header('LOCATION: signup.html');
}
