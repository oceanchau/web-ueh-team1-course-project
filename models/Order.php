<?php
require_once('models/dto/OrderData.php');

class Order
{
    private $id;
    private $status;
    private $amount;
    private $payment;
    private $userId;
    private $createdAt;

    static function all(): array
    {
        $list = [];
        $db = DatabaseConfig::getInstance();
        $req = $db->query('SELECT * FROM tbl_orders');

        foreach ($req->fetchAll() as $item) {
            $list[] = (new Order())
                ->setId($item['id'])
                ->setStatus($item['status'])
                ->setCreatedAt($item['createdAt']);
        }

        return $list;
    }

    static function findByUsername($username): array
    {
        $db = DatabaseConfig::getInstance();
        $req = $db->prepare('SELECT o.id, p.name, p.img, o.createdAt, op.quantity, o.status, op.amount FROM tbl_orders o 
                    INNER JOIN tbl_order_products op 
                    ON o.id = op.orderId
                    INNER JOIN tbl_products p
                    ON p.id = op.productId
                    INNER join tbl_users u
                    ON u.username = o.username
                    WHERE u.username = :username
                    ORDER BY o.createdAt DESC');
        $req->execute(array('username' => $username));
        $list = [];
        foreach ($req->fetchAll() as $item) {
            $list[] = new OrderData($item);
        }

        return $list;
    }

    static function find($id): Order
    {
        $db = DatabaseConfig::getInstance();
        $req = $db->prepare('SELECT * FROM tbl_orders WHERE id = :id');
        $req->bindValue('id', $id);
        $req->execute();

        $item = $req->fetch();

        return (new Order())
            ->setId($item['id'])
            ->setStatus($item['status'])
            ->setCreatedAt($item['createdAt']);
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
     * @return Order
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return Order
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     * @return Order
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param mixed $payment
     * @return Order
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     * @return Order
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     * @return Order
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}