<?php
require_once('controllers/BaseController.php');
require_once('models/Product.php');
require_once('models/Category.php');
require_once('models/dto/ProductFilter.php');
require_once('models/dto/Level.php');

class ShopController extends BaseController
{
    protected array $levels;

    function __construct()
    {
        $this->levels[] = new Level('pages', 'home', 'Home');
        $this->levels[] = new Level('shop', 'index', 'Shop');

        $this->folder = 'shop';
    }

    public function index()
    {
        $categoryId = $_GET['id'] ?? null;
        $page = $_GET['page'] ?? 1;
        $search = $_GET['search'] ?? null;
        $priceStart = $_GET['priceStart'] ?? null;
        $priceEnd = $_GET['priceEnd'] ?? null;
        $productFilter = (new ProductFilter())
            ->setSearch($search)
            ->setPriceStart($priceStart)
            ->setPriceEnd($priceEnd)
            ->setPage($page)
            ->setCategoryId($categoryId);

        $products = Product::all($productFilter);

        $categories = Category::all();
        $categoryName = $this->getCategoryName($categoryId, $categories);
        $this->levels[] = (new Level('shop', 'index', $categoryName));

        $data = array(
            'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName,
            'levels' => $this->levels);
        $this->render('index', $data);
    }

    public function checkout()
    {
        $data = array(
            'levels' => $this->levels);
        $this->render('checkout', $data);
    }

    public function single()
    {
        $product = Product::find($_GET['code']);
        $relatedProduct = Product::all(new ProductFilter())->getData();
        $categories = Category::all();
        $categoryName = $this->getCategoryName($product->getCategoryId(), $categories);
        $this->levels[] = (new Level('shop', 'index', $categoryName))
            ->setId($product->getCategoryId());
        $this->levels[] = (new Level('shop', 'single', $product->getName()));
        $data = array(
            'product' => $product,
            'relatedProduct' => $relatedProduct,
            'categories' => $categories,
            'categoryName' => $categoryName,
            'levels' => $this->levels);

        $this->render('single', $data);
    }

    private function getCategoryName(mixed $categoryId, array $categories): mixed
    {
        if (isset($_GET['search'])) {
            return "Tìm kiếm với '" . $_GET['search'] . "'";
        }
        $categoryName = 'Tất cả';
        if ($categoryId == null) {
            return $categoryName;
        }
        foreach ($categories as $category) {
            if ($category->id == $categoryId) {
                return $category->name;
            }
        }
        return $categoryName;
    }
}
