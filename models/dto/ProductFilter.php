<?php

class ProductFilter
{
    public $id;
    private $categoryId;
    public $search;
    private $priceStart;
    private $priceEnd;
    private $page = 1;
    private $limit = 8;

    /**
     * @return mixed
     */
    public function getPriceStart()
    {
        return $this->priceStart;
    }

    /**
     * @param mixed $priceStart
     * @return ProductFilter
     */
    public function setPriceStart($priceStart)
    {
        $this->priceStart = $priceStart;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriceEnd()
    {
        return $this->priceEnd;
    }

    /**
     * @param mixed $priceEnd
     * @return ProductFilter
     */
    public function setPriceEnd($priceEnd)
    {
        $this->priceEnd = $priceEnd;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $page
     * @return ProductFilter
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param mixed $limit
     * @return ProductFilter
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * @param mixed $search
     * @return ProductFilter
     */
    public function setSearch($search)
    {
        $this->search = $search;
        return $this;
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
     * @return ProductFilter
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return ProductFilter
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
        return $this;
    }
}

?>