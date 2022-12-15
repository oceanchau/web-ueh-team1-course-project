<?php
require_once "models/product_model.php";

$product = new Product();


if (isset($_POST['updateProduct'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $amount = $_POST['amount'];
    $price = $_POST['price'];
    $imageUrl = $_POST['imageUrl'];
    $description = $_POST['description'];
    $code = $_POST['code'];
    $product->updateProduct($id, $name, $imageUrl, $description, $price, $amount, $code);

}

if (isset($_POST['deleteProduct'])) {
    $product->deleteProduct($_POST['id']);
}


?>