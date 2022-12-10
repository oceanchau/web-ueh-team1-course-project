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
        return [];
    }
    public  function getTransactions(): array
    {
        return [];
    }

    public  function getTransactionById($id)
    {
        return null;
    }
}

?>