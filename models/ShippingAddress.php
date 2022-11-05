<?php
class ShippingAddress {
    private $id;
    private $firstName;
    private $lastName;
    private $username;
    private $address;
    private $area;
    private $province;
    private $zip;
    private $phone;

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    public function __toString(): string
    {
        return $this->getId()." ".$this->getUsername();
    }

    /**
     * @param mixed $phone
     * @return ShippingAddress
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
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
     * @return ShippingAddress
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     * @return ShippingAddress
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     * @return ShippingAddress
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
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
     * @return ShippingAddress
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     * @return ShippingAddress
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param mixed $area
     * @return ShippingAddress
     */
    public function setArea($area)
    {
        $this->area = $area;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param mixed $province
     * @return ShippingAddress
     */
    public function setProvince($province)
    {
        $this->province = $province;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param mixed $zip
     * @return ShippingAddress
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }
}