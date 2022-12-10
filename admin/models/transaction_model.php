<?php
class Transaction
{
 
    private $transactions;
    private $connect;
    public function __construct()
    {
      $this->connect = getConnect();
    }

    public  function getTransactions(): array
    {
        return $this->transactions;
    }

    public  function getTransactionById($id)
    {
        return null;
    }
}

?>