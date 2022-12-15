<?php
require_once "models/user_model.php";
$error = '';
$userAction = new Users();
if (isset($_POST['email'])) {
    $userInfo = $userAction->login($_POST['email'], $_POST['password']);
    if (!$userInfo) {
        $error = "email or password is incorrect";
    } else {
        $_SESSION['user'] = $userInfo;
        header('Location: ./');
    }
}
?>