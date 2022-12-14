<?php
require_once('models/dto/OrderData.php');
require_once('models/dto/OrderDto.php');

class Order
{
    private $id;
    private $status;
    private $amount;
    private $payment;
    private $userId;
    private $createdAt;

    static function saveCompletion(OrderDto $orderData): void
    {
        $db = DatabaseConfig::getInstance();
        try {
            $db->beginTransaction();
            $req = $db->prepare(
                'UPDATE tbl_orders SET status=:status, payment=:payment WHERE id=:id
            ');
            $req->bindValue('payment', $orderData->getPayment());
            $req->bindValue('status', $orderData->getStatus());
            $req->bindValue('id', $orderData->getId());

            $req->execute();

            $db->commit();
        } catch (Exception $e) {
            $db->rollBack();
            throw new ErrorException("Lỗi hệ thống" . $e);
        }
    }

    static function saveDraft(OrderDto $orderData, $cart): int
    {
        $db = DatabaseConfig::getInstance();
        try {
            $date = date('Y-m-d H:i:s');

            $db->beginTransaction();
            $req = $db->prepare('INSERT INTO tbl_orders(status, amount, payment, username, createdAt) 
            VALUES (:status, :amount, :payment, :username, :createdAt)');

            $req->bindValue('status', $orderData->getStatus());
            $req->bindValue('amount', $orderData->getAmount());
            $req->bindValue('payment', '');
            $req->bindValue('username', $orderData->getUsername());
            $req->bindValue('createdAt', $date);

            $req->execute();
            $id = $db->lastInsertId();
            foreach ($cart as $item) {
                $reqCart = $db->prepare('INSERT INTO tbl_order_products(orderId, productId, quantity, amount) 
                    VALUES (:orderId, :productId, :quantity, :amount)');

                $reqCart->bindValue('orderId', $id);
                $reqCart->bindValue('productId', $item->id);
                $reqCart->bindValue('quantity', $item->count);
                $reqCart->bindValue('amount', $item->total);
                $reqCart->execute();
            }
            $db->commit();
            return $id;
        } catch (Exception $e) {
            $db->rollBack();
            throw new ErrorException("Lỗi hệ thống" . $e);
        }
    }

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
                    ORDER BY o.id DESC');
        $req->execute(array('username' => $username));
        $list = [];
        foreach ($req->fetchAll() as $item) {
            $list[] = new OrderData($item);
        }

        return $list;
    }

    static function find($id): array
    {
        $db = DatabaseConfig::getInstance();
        $req = $db->prepare('SELECT o.id, p.name, p.img, o.createdAt, op.quantity, o.status, op.amount FROM tbl_orders o 
                    INNER JOIN tbl_order_products op 
                    ON o.id = op.orderId
                    INNER JOIN tbl_products p
                    ON p.id = op.productId
                    INNER join tbl_users u
                    ON u.username = o.username
                    WHERE o.id = :id
                    ORDER BY o.id DESC');
        $req->execute(array('id' => $id));
        $list = [];
        foreach ($req->fetchAll() as $item) {
            $list[] = new OrderData($item);
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