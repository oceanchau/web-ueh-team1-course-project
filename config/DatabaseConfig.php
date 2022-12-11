<?php
define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "id17378250_webbanhang");

class DatabaseConfig
{
    private static $instance = NULl;
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
