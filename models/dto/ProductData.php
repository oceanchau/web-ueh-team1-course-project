<?php

class ProductData
{
    private $page;
    private $limit;
    private $totalResults;
    private $totalPages;
    private array $data;

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $page
     * @return ProductData
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
     * @return ProductData
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalResults()
    {
        return $this->totalResults;
    }

    /**
     * @param mixed $totalResults
     * @return ProductData
     */
    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalPages()
    {
        return $this->totalPages;
    }

    /**
     * @param mixed $totalPages
     * @return ProductData
     */
    public function setTotalPages($totalPages)
    {
        $this->totalPages = $totalPages;
        return $this;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return ProductData
     */
    public function setData(array $data): ProductData
    {
        $this->data = $data;
        return $this;
    }
}