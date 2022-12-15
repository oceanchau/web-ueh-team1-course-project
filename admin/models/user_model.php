<?php
class Users
{
    private $connect;
    public function __construct()
    {
        $this->connect = getConnect();
    }
    function login($email, $password)
    {
        $sql = 'SELECT username FROM tbl_users 
        WHERE email = :email
        AND password = :password';
        $statement = $this->connect->prepare($sql);
        $statement->execute([
            ':email' => $email,
            ':password' => md5($password),
        ]);
        $user = $statement->fetch();
        return $user['username'];
    }
}

?>