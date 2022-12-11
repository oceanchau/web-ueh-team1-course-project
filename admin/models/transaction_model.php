<?php
class Transaction
{


    private $connect;
    public function __construct()
    {
        $this->connect = getConnect();
    }
    public function getBetSeller()
    {
        $sql = 'SELECT productId,SUM(amount) as total, price,name FROM tbl_transactions WHERE status="success"  GROUP by productId  ORDER BY total DESC LIMIT 10;';
        $result = $this->connect->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getTransactions(): array
    {
        $sql = 'SELECT * FROM tbl_transactions ORDER BY time';
        $result = $this->connect->query($sql);
        if (!$result) {
            print "<p>" . $this->connect->errorInfo() . "</p>";
            return [];
        }
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTransactionById($id)
    {
        $sql = 'SELECT * FROM tbl_transactions where id = "' . $id . '"';
        $result = $this->connect->query($sql);
        if (!$result) {
            print "<p>" . $this->connect->errorInfo() . "</p>";
            return null;
        }
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>