<?php
require_once "models/order_model.php";
$order = new Order();
$orders = $order->getBetSeller();
?>