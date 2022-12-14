<?php
class Order
{


    private $connect;
    private $table = 'tbl_orders';
    public function __construct()
    {
        $this->connect = getConnect();
    }
    public function getBetSeller()
    {
        $sql = 'SELECT tbl_order_products.productId,SUM(tbl_order_products.quantity) as total, tbl_order_products.amount FROM tbl_orders INNER JOIN tbl_order_products ON tbl_order_products.orderId = tbl_orders.id WHERE status="Completed"  GROUP by productId  ORDER BY total DESC LIMIT 10;';
        $result = $this->connect->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getOrders($limit = 200): array
    {
        $sql = 'SELECT * FROM tbl_orders  LIMIT ' . $limit . '';
        $result = $this->connect->query($sql);
        if (!$result) {
            print "<p>" . $this->connect->errorInfo() . "</p>";
            return [];
        }
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOrderId($id)
    {
        $sql = 'SELECT * FROM tbl_orders where id = "' . $id . '"';
        $result = $this->connect->query($sql);
        if (!$result) {
            print "<p>" . $this->connect->errorInfo() . "</p>";
            return null;
        }
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getOrderByStatus($status = 'Completed'):array
    {
        $sql = 'SELECT * FROM tbl_orders where status = "' . $status . '"';
        $result = $this->connect->query($sql);
        if (!$result) {
            print "<p>" . $this->connect->errorInfo() . "</p>";
            return [];
        }
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>