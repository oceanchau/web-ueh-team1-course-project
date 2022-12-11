<?php
require_once('models/dto/ProductData.php');

class Product
{
    public $id;
    public $code;
    public $name;
    public $price;
    public $status;
    public $categoryId;
    public $detail;
    public $img;

    static function all(ProductFilter $productFilter)
    {
        $list = [];
        $db = DatabaseConfig::getInstance();
        $sqlCount = 'SELECT count(1)
                FROM tbl_products WHERE 1 = 1';
        $sql = 'SELECT id,  code, categoryId, img, price, name, status 
                FROM tbl_products WHERE 1 = 1';
        if ($productFilter->getCategoryId() !== null) {
            $sqlCount .= ' AND categoryId = :categoryId';
            $sql .= ' AND categoryId = :categoryId';
        }
        if ($productFilter->getPriceStart() !== null && $productFilter->getPriceEnd() !== null) {
            $sqlCount .= ' AND price BETWEEN :priceStart AND :priceEnd';
            $sql .= ' AND price BETWEEN :priceStart AND :priceEnd';
        }
        if ($productFilter->getSearch() !== null) {
            $sqlCount .= ' AND name like :search';
            $sql .= ' AND name like :search';
        }
        $sql .= ' ORDER BY id DESC LIMIT :startingLimit, :limit ';

        $reqCount = $db->prepare($sqlCount);
        $req = $db->prepare($sql);
        if ($productFilter->getCategoryId() > 0) {
            $req->bindValue('categoryId', $productFilter->getCategoryId());
            $reqCount->bindValue('categoryId', $productFilter->getCategoryId());
        }
        if ($productFilter->getSearch() !== null) {
            $req->bindValue('search', '%' . $productFilter->getSearch() . '%');
            $reqCount->bindValue('search', '%' . $productFilter->getSearch() . '%');
        }
        if ($productFilter->getPriceStart() !== null && $productFilter->getPriceEnd() !== null) {
            $req->bindValue('priceStart', $productFilter->getPriceStart());
            $req->bindValue('priceEnd', $productFilter->getPriceEnd());
            $reqCount->bindValue('priceStart', $productFilter->getPriceStart());
            $reqCount->bindValue('priceEnd', $productFilter->getPriceEnd());
        }

        $startingLimit = ($productFilter->getPage() - 1) * $productFilter->getLimit();

        $req->bindValue('startingLimit', $startingLimit, PDO::PARAM_INT);
        $req->bindValue('limit', $productFilter->getLimit(), PDO::PARAM_INT);

        $req->execute();
        $reqCount->execute();
        $totalResults = $reqCount->fetchColumn();
        $totalPages = ceil($totalResults / $productFilter->getLimit());

        foreach ($req->fetchAll() as $item) {
            $img = $item['img'];
            $list[] = (new Product())
                ->setId($item['id'])
                ->setCode($item['code'])
                ->setCategoryId($item['categoryId'])
                ->setImg(isset($img) ? explode(',', $img) : null)
                ->setPrice($item['price'])
                ->setName($item['name'])
                ->setStatus($item['status']);
        }

        return (new ProductData())
            ->setData($list)
            ->setLimit($productFilter->getLimit())
            ->setPage($productFilter->getPage())
            ->setTotalPages($totalPages)
            ->setTotalResults($totalResults);
    }

    static function find($code)
    {
        $db = DatabaseConfig::getInstance();
        $req = $db->prepare('SELECT * FROM tbl_products WHERE code = :code');
        $req->execute(array('code' => $code));

        $item = $req->fetch();
        if (isset($item['id'])) {
            $img = $item['img'];
            return (new Product())
                ->setId($item['id'])
                ->setCode($item['code'])
                ->setDetail($item['detail'])
                ->setCategoryId($item['categoryId'])
                ->setImg(isset($img) ? explode(',', $img) : null)
                ->setPrice($item['price'])
                ->setName($item['name'])
                ->setStatus($item['status']);
        }
        return null;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Product
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     * @return Product
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return Product
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param mixed $categoryId
     * @return Product
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param mixed $detail
     * @return Product
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     * @return Product
     */
    public function setImg($img)
    {
        $this->img = $img;
        return $this;
    }
}
