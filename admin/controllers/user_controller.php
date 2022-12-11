<?php
session_start();
$error = '';
if (isset($_POST['email'])) {
    if ($_POST['email'] != "admin@example.com" || $_POST['password'] != "123456") {
        $error = "email or password is incorrect";
        header('Location: ../view/login.php');
    } else {
        $_SESSION['user'] = "true";
        header('Location: ../index.php');
    }
}

?>