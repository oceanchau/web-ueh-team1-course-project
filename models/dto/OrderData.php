<?php

class OrderData
{
    private $id;
    private $status;
    private $amount;
    private $createdAt;
    private $productName;
    private $img;
    private $quantity;
    private $username;

    public function __construct($item)
    {
        $this->id = $item['id'];
        $this->status = $item['status'];
        $this->createdAt = $item['createdAt'];
        $this->amount = $item['amount'];
        $this->productName = $item['name'];
        $img = $item['img'];
        $this->img = isset($img) ? explode(',', $img) : null;
        $this->quantity = $item['quantity'];
    }

    /**
     * @return mixed
     */
    public function getId(): mixed
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return OrderData
     */
    public function setId(mixed $id): OrderData
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus(): mixed
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return OrderData
     */
    public function setStatus(mixed $status): OrderData
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmount(): mixed
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     * @return OrderData
     */
    public function setAmount(mixed $amount): OrderData
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt(): mixed
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     * @return OrderData
     */
    public function setCreatedAt(mixed $createdAt): OrderData
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductName(): mixed
    {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     * @return OrderData
     */
    public function setProductName(mixed $productName): OrderData
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getImg(): ?array
    {
        return $this->img;
    }

    /**
     * @param string[]|null $img
     * @return OrderData
     */
    public function setImg(?array $img): OrderData
    {
        $this->img = $img;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantity(): mixed
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     * @return OrderData
     */
    public function setQuantity(mixed $quantity): OrderData
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     * @return OrderData
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }
}