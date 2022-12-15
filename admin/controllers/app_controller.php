<?php
require_once "models/transtaction_model.php";
require_once "models/order_model.php";

$transaction = new Transactions();

$transactions = $transaction->getTransactions(3);

function getTotalMoneySales()
{
    return number_format(400000, 0, ".", ",") . " VND";
}

function getTotalMoneyTransactions()
{
    return number_format(400000, 0, ".", ",") . " VND";
}

function getTotalMoneyPayments()
{
    return number_format(400000, 0, ".", ",") . " VND";
}

function getPendingOrder(){
    $order = new Order();
    $ordersIsPending = $order->getOrderByStatus("Pending");
    return "# ".count($ordersIsPending);
}

?>