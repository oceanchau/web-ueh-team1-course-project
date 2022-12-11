<?php
require_once('controllers/BaseController.php');
require_once('models/Product.php');
require_once('models/Category.php');
require_once('models/User.php');
require_once('models/dto/ProductFilter.php');

class PagesController extends BaseController
{
    function __construct()
    {
        $this->folder = 'pages';
    }

    public function home()
    {
        $filter = (new ProductFilter())
            ->setLimit(5);
        $products = Product::all($filter)->getData();
        $filter->setLimit(3);
        $productSaleOff = Product::all($filter)->getData();
        $categories = Category::all();
        $data = array('productSaleOff' => $productSaleOff, 'products' => $products, 'categories' => $categories);
        $this->render('home', $data);
    }

    public function about()
    {
        // TODO about
        $categories = Category::all();
        $data = array('categories' => $categories);
        $this->render('about', $data);
    }

    public function contact()
    {
        // TODO contact
        $categories = Category::all();
        $data = array('categories' => $categories);
        $this->render('contact', $data);
    }

    public function signIn()
    {
        // TODO signIn
        $data = [];
        $this->render('signIn', $data);
    }

    public function signUp()
    {
        // TODO signUp
        $data = [];
        $this->render('signUp', $data);
    }

    public function forgotPassword()
    {
        // TODO forgotPassword
        $data = [];
        $this->render('forgotPassword', $data);
    }

    public function error()
    {
        $data = array(
            'product' => ['ha'],
        );
        $this->render('error', $data);
    }
}
