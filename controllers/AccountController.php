<?php
require_once('controllers/BaseController.php');
require_once('models/Category.php');
require_once('models/Order.php');
require_once('models/User.php');
require_once('models/ShippingAddress.php');

class AccountController extends BaseController
{

    function __construct()
    {
        $this->folder = 'account';
    }

    public function orders()
    {
        $categories = Category::all();
        $orders = Order::findByUsername(self::getCurrentUser());
        $data = array('categories' => $categories, 'orders' => $orders);
        $this->render('orders', $data);
    }

    public function address()
    {
        $shippingAddress = ShippingAddress::find(self::getCurrentUser());
        $categories = Category::all();
        $data = array('categories' => $categories, 'shippingAddress' => $shippingAddress);
        $this->render('address', $data);
    }

    public function signIn()
    {
        $isLogged = User::login($_POST['inputEmail4'], md5($_POST['inputPassword4']));
        if (!$isLogged) {
           echo 0;
        }
        $_SESSION['currentUser'] = $_POST['inputEmail4'];
        echo $_SESSION['currentUser'];
    }

    public function signUp()
    {
        // TODO signUp
        $data = [];
        $this->render('signUp', $data);
    }

    public function logout()
    {
        setcookie(session_name(), '', 100);
        session_unset();
        session_destroy();
        $_SESSION = array();

        header("Location: /");
    }

    public static function saveShippingAddress(ShippingAddress $shippingAddress)
    {
        $shippingAddress->setUsername(self::getCurrentUser());
        ShippingAddress::saveShippingAddress($shippingAddress);
    }
}
