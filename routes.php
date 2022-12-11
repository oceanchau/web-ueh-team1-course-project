<?php
$controllers = array(
    'pages' => ['home', 'about', 'contact', 'signIn', 'signUp', 'forgotPassword', 'error'],
    'account' => ['index', 'orders', 'address', 'signIn', 'logout'],
    'shop' => ['index', 'single', 'checkout', 'checkoutOrder', 'placeOrder'],
);

//if (isset($_GET['search'])) {
//    $controller = 'shop';
//    $action = 'index';
//}

if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
    $controller = 'pages';
    $action = 'error';
}

$klass = ucfirst($controller) . 'Controller';
include_once('controllers/' . $klass . '.php');
$controller = new $klass;
$controller->$action();