<?php
require "./configs/connect.php";
require "./utils/query_parrams.php";
require "./utils/get_hyper_link.php";
require "./utils/load_file.php";
require "./helpers/const.php";
require_once "models/product_model.php";
session_start();

$pages = getPages();
$product = new Product();

if (!isset($_SESSION['user'])) {
    header('Location: view/login.php');
}
if (isset($_POST['updateProduct'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $amount = $_POST['amount'];
    $price = $_POST['price'];
    $imageUrl = $_POST['imageUrl'];
    $description = $_POST['description'];
    $code = $_POST['code'];
    $product->updateProduct($id, $name, $imageUrl, $description, $price, $amount,$code);

}

if (isset($_POST['deleteProduct'])) {
    $product->deleteProduct($_POST['id']);
}

if (isset($_POST['createProduct'])) {
    $name = $_POST['name'];
    $amount = $_POST['amount'];
    $price = $_POST['price'];
    $imageUrl = $_POST['imageUrl'];
    $description = $_POST['description'];
    $code = $_POST['code'];
    $product->insertProduct($name, $imageUrl, $description, $price, $amount,$code);
}


?>