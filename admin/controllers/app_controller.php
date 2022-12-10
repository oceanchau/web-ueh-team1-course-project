<?php
require "./configs/connect.php";
require "./utils/query_parrams.php";
require "./utils/get_hyper_link.php";
require "./utils/load_file.php";
require "./helpers/const.php";
session_start();

$pages = getPages();


if (!isset($_SESSION['user'])) {
    header('Location: view/login.php');
}

echo ($_POST['email']);

?>