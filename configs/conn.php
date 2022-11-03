<?php
define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "webbanhang");

class DBController
{

    private static $instance = NULl;

    function __construct()
    {
        $this->conn = $this->connectDB();
    }

    function connectDB()
    {
        $conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
        return $conn;
    }

    function runQuery($query)
    {
        $result = mysqli_query($this->conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        if (!empty($resultset))
            return $resultset;
    }

    function numRows($query)
    {
        $result = mysqli_query($this->conn, $query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO('mysql:host=' . HOST . ';dbname=' . DATABASE . '', USER, PASSWORD);
                self::$instance->exec("SET NAMES 'utf8'");
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $ex) {
                die($ex->getMessage());
            }
        }
        return self::$instance;
    }
}
