<?php
require_once "models/order_model.php";
$order = new Order();
$pageNumber = getParams("pageNumber");
$limit = getParams("limit");
$orders = $order->getOrders();
$total_pages = ceil(count($orders) / $limit);


?>