<?php
require_once "models/product_model.php";

$product = new Product();
$products = $product->getProducts();
$pageNumber = getParams("pageNumber");
$limit = getParams("limit");
$total_pages = ceil(count($products) / $limit);

if (isset($_POST['createProduct'])) {
    $name = $_POST['name'];
    $status = $_POST['status'];
    $price = $_POST['price'];
    $imageUrl = $_POST['imageUrl'];
    $description = $_POST['description'];
    $code = $_POST['code'];
    $product->insertProduct($name, $imageUrl, $description, $price, $status, $code);
    header('Location: ./?p=products&pageNumber=1&limit=20');
}

?>