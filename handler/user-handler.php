<?php
require_once("configs/conn.php");

function signup($user)
{
    $db = DBController::getInstance();
    try {
        $statement = $db->prepare('
        INSERT INTO tbl_users(hoTen, email, username, password) VALUES (:fname, :username, :username, :password)
    ');

        $statement->execute([
            'fname' => $user->fname,
            'username' => $user->username,
            'password' => $user->password,
        ]);
        header("Location: /?p=signin");

    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function login($username, $password)
{
    $db = DBController::getInstance();
    try {
        $statement = $db->prepare('
        SELECT * FROM tbl_users u WHERE u.username = :username AND u.password = :password 
    ');

        $statement->execute([
            'username' => $username,
            'password' => $password,
        ]);
        $item = $statement->fetch();
        if (isset($item['username'])) {
            $_SESSION["currentUser"] = $item['username'];
            header("Location: /");
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

class UserSignUp
{
    public $fname;
    public $username;
    public $password;
}

//header("Location: /");
?>