<?php

class User
{
    public $id;
    public $fullName;
    public $username;
    public $password;
    public $shippingAddress;

    static function find($username): User
    {
        $db = DatabaseConfig::getInstance();
        $req = $db->prepare('SELECT * FROM tbl_users WHERE username = :username');
        $req->execute(array('username' => $username));

        $item = $req->fetch();
        return (new User())
            ->setUsername($item['username'])
            ->setShippingAddress($item['shippingAddress'])
            ->setId($item['fullname']);
    }

    static function login($username, $password): bool
    {
        $db = DatabaseConfig::getInstance();
        $req = $db->prepare('SELECT username FROM tbl_users 
         WHERE username = :username
         AND password = :password');
        $req->bindValue('username', $username);
        $req->bindValue('password', $password);
        $req->execute();

        $item = $req->fetch();
        return isset($item['username']);
    }

    /**
     * @throws ErrorException
     * @throws Exception
     */
    static function signUp(User $userIn): void
    {
        $db = DatabaseConfig::getInstance();
        $existedUser = self::existsByUsername($userIn->getUsername());
        if ($existedUser) {
            throw new ErrorException("Tên tài khoản đã tồn tại");
        }
        try {
            $db->beginTransaction();
            $req = $db->prepare('INSERT INTO tbl_users(fullname, username, password, email) 
            VALUES (:fullname, :username, :password, :email)');

            $req->bindValue('fullname', $userIn->getFullName());
            $req->bindValue('username', $userIn->getUsername());
            $req->bindValue('password', $userIn->getPassword());
            $req->bindValue('email', $userIn->getUsername());

            $req->execute();
            $db->commit();
        } catch (Exception) {
            $db->rollBack();
            throw new ErrorException("Lỗi hệ thống");
        }
    }

    static function updateShippingAddress($username, $shippingAddress): void
    {
        $db = DatabaseConfig::getInstance();
        $existedUser = self::existsByUsername($username);
        if (!$existedUser) {
            throw new ErrorException("Tài khoản không tồn tại");
        }
        try {
            $db->beginTransaction();
            $req = $db->prepare('
                UPDATE tbl_users SET shippingAddress = :shippingAddress WHERE username = :username
            ');

            $req->bindValue('username', $username);
            $req->bindValue('shippingAddress', $shippingAddress);

            $req->execute();
            $db->commit();
        } catch (Exception) {
            $db->rollBack();
            throw new ErrorException("Lỗi hệ thống");
        }
    }

    static function existsByUsername($username): bool
    {
        $db = DatabaseConfig::getInstance();
        $req = $db->prepare('SELECT username FROM tbl_users WHERE username = :username');
        $req->execute(array('username' => $username));

        $item = $req->fetch();
        return isset($item['username']);
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
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param mixed $fullName
     * @return User
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
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
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @param mixed $shippingAddress
     * @return User
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }
}