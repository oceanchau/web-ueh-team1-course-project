<?php
class Transactions
{
    private $connect;
    public function __construct()
    {
        $this->connect = getConnect();
    }
    function getTransactions($limit = 20)
    {
        $sql = 'SELECT * FROM tbl_transactions LIMIT ' . $limit . '';
        $result = $this->connect->query($sql);
        if (!$result) {
            print "<p>" . $this->connect->errorInfo() . "</p>";
            return [];
        }
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    function getTotalMoneyTransactionsPaid(){
        $sql = 'SELECT * FROM tbl_transactions ';
    }
}

?>