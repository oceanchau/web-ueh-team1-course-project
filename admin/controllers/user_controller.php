<?php
session_start();
echo $_POST['email'];
$_SESSION['user'] = "true";
header('Location: ../index.php');
?>