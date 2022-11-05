<?php
require_once("configs/conn.php");
require_once("models/ShippingAddress.php");
require_once("models/Transaction.php");
require_once("enums/PaymentMethod.php");
require_once("enums/TransactionStatus.php");

function saveTransaction(Transaction $transaction)
{
    validateOrder($transaction->getOrderId(), $transaction->getUsername());

    $db = DBController::getInstance();
    try {
        $findOne = getTransaction($transaction->getOrderId());
        if (isset($findOne)) {
            return;
        }
        $sql = '
                INSERT INTO tbl_transactions(amount, paymentMethod, username, shippingAddressId, orderId, status, createdAt) 
                VALUES (:amount, :paymentMethod, :username, :shippingAddressId, :orderId, :status, :createdAt)
            ';

        $statement = $db->prepare($sql);

        $statement->execute([
            'amount' => $transaction->getAmount(),
            'paymentMethod' => $transaction->getPaymentMethod(),
            'username' => $transaction->getUsername(),
            'shippingAddressId' => $transaction->getShippingAddressId(),
            'orderId' => $transaction->getOrderId(),
            'status' => $transaction->getStatus(),
            'createdAt' => date('Y-m-d H:i:s')
            ,
        ]);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getTransaction($orderId): ?Transaction
{
    $db = DBController::getInstance();

    try {
        $statement = $db->prepare('
        SELECT s.* FROM tbl_transactions s
        WHERE s.orderId = :orderId
    ');

        $statement->execute([
            'orderId' => $orderId
        ]);

        $item = $statement->fetch();

        $response = null;
        if (isset($item['id'])) {
            $response = (new Transaction())
                ->setId($item['id'])
                ->setUsername($item['username']);
        }
        return $response;
    } catch (Exception $e) {
        echo $e->getMessage();
        return null;
    }
}

function saveShippingAddress(ShippingAddress $shippingAddress): ?ShippingAddress
{
    $db = DBController::getInstance();

    try {
        $findOne = getShippingAddress($shippingAddress->getUsername());

        if (isset($findOne)) {
            $sql = '
            UPDATE `tbl_shipping_address` 
            SET 
                `firstName` = :firstName,
                `lastName` = :lastName,
                `username` = :username,
                `address` = :address,
                `area` = :area,
                `province` = :province,
                `zip` = :zip,
                `phone` = :phone
            WHERE username = :username
            ';
        } else {
            $sql = '
            INSERT INTO tbl_shipping_address(firstName, lastName, username, address, area, province, zip, phone) 
            VALUES (:firstName, :lastName, :username, :address, :area, :province, :zip, :phone)
            ';
        }

        $statement = $db->prepare($sql);

        $statement->execute([
            'firstName' => $shippingAddress->getFirstName(),
            'lastName' => $shippingAddress->getLastName(),
            'username' => $shippingAddress->getUsername(),
            'address' => $shippingAddress->getAddress(),
            'area' => $shippingAddress->getArea(),
            'province' => $shippingAddress->getProvince(),
            'zip' => $shippingAddress->getZip(),
            'phone' => $shippingAddress->getPhone(),
        ]);
        $findOne = getShippingAddress($shippingAddress->getUsername());
        if (isset($findOne)) {
            $shippingAddress->setId($findOne->getId());
        }
//        header("Location: /?p=signin");
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    return $shippingAddress;
}

function getShippingAddress($username): ?ShippingAddress
{
    $db = DBController::getInstance();

    try {
        $statement = $db->prepare('
        SELECT s.* FROM tbl_shipping_address s
        WHERE s.username = :username
    ');

        $statement->execute([
            'username' => $username
        ]);

        $item = $statement->fetch();

        $response = null;
        if (isset($item['id'])) {
            $response = (new ShippingAddress())
                ->setId($item['id'])
                ->setFirstName($item['firstName'])
                ->setLastName($item['lastName'])
                ->setUsername($item['username'])
                ->setAddress($item['address'])
                ->setArea($item['area'])
                ->setPhone($item['phone'])
                ->setProvince($item['province'])
                ->setZip($item['zip']);
        }
        return $response;
    } catch (Exception $e) {
        echo $e->getMessage();
        return null;
    }
}

function validateOrder($orderId, $userId)
{
//    TODO: validateOrder
}