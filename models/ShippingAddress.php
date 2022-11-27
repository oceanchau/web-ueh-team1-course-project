<?php

class ShippingAddress
{
    private $id;
    private $fullname;
    private $username;
    private $address;
    private $city;
    private $phone;

    static function saveShippingAddress(ShippingAddress $shippingAddress): ?ShippingAddress
    {
        $db = DatabaseConfig::getInstance();

        try {
            $existed = self::existsByUsername($shippingAddress->getUsername());
            if ($existed > 1) {
                throw new ErrorException("Limited add Shipping Address");
            }
            if ($existed > 0) {
                $sql = '
            UPDATE tbl_shipping_address
            SET 
                `fullname` = :fullname,
                `username` = :username,
                `address` = :address,
                `city` = :city,
                `phone` = :phone
            WHERE id = :id
            ';
            } else {
                $sql = '
            INSERT INTO tbl_shipping_address(id, fullname, username, address, city, phone) 
            VALUES (:id, :fullname, :username, :address, :city, :phone)
            ';
            }

            $statement = $db->prepare($sql);

            $statement->execute([
                'id' => $shippingAddress->getId(),
                'fullname' => $shippingAddress->getFullname(),
                'username' => $shippingAddress->getUsername(),
                'address' => $shippingAddress->getAddress(),
                'city' => $shippingAddress->getCity(),
                'phone' => $shippingAddress->getPhone()
            ]);

        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $shippingAddress;
    }

    static function existsByUsername($username): bool
    {
        $db = DatabaseConfig::getInstance();
        $req = $db->prepare('
            SELECT count(1) FROM tbl_shipping_address s
            WHERE s.username = :username
        ');

        $req->execute([
            'username' => $username
        ]);


        return $req->fetchColumn();
    }

    static function find($username): array
    {
        $list = [];
        $db = DatabaseConfig::getInstance();
        $req = $db->prepare('
            SELECT s.* FROM tbl_shipping_address s
            WHERE s.username = :username
        ');

        $req->execute([
            'username' => $username
        ]);

        foreach ($req->fetchAll() as $item) {
            $list[] = (new ShippingAddress())
                ->setId($item['id'])
                ->setFullname($item['fullname'])
                ->setUsername($item['username'])
                ->setAddress($item['address'])
                ->setCity($item['city'])
                ->setPhone($item['phone']);
        }

        return $list;
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
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * @param mixed $fullname
     * @return ShippingAddress
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
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
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     * @return ShippingAddress
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
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
}