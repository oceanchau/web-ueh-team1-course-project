<?php
class Product
{
    private $connect;
    public function __construct()
    {
        $this->connect = getConnect();
    }
    public function getProducts(): array
    {
        $sql = 'SELECT * FROM tbl_products ORDER BY name';
        $result = $this->connect->query($sql);
        if (!$result) {
            print "<p>" . $this->connect->errorInfo() . "</p>";
            return [];
        }
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($id)
    {
        $sql = 'SELECT * FROM tbl_products where id = "' . $id . '"';
        $result = $this->connect->query($sql);
        if (!$result) {
            print "<p>" . $this->connect->errorInfo() . "</p>";
            return null;
        }
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    public function insertProduct($name, $imageUrl, $description, $price, $status, $code)
    {
        $sql = 'INSERT INTO tbl_products(name,code,img,price,status,detail) VALUES(:name,:code,:image,:price,:status,:description)';

        $statement = $this->connect->prepare($sql);

        $statement->execute([
            ':name' => $name,
            ':code' => $code,
            ':image' => $imageUrl,
            ':price' => $price,
            ':status' => $status,
            ':description' => $description
        ]);
        $publisher_id = $this->connect->lastInsertId();
        if (!$publisher_id) {
            print "<p>" . $this->connect->errorInfo() . "</p>";
            return null;
        }
        return $publisher_id;
    }
    public function updateProduct($id, $name, $imageUrl, $description, $price, $amount, $code)
    {
        $sql = "UPDATE tbl_products SET name = ?, code = ?,price = ?, status=?, img=?, detail=? WHERE id = ?";
        $statement = $this->connect->prepare($sql);
        $statement->execute([$name, $code, $price, $amount, $imageUrl, $description, $id]);
    }
    public function deleteProduct($id)
    {
        $sql = 'DELETE FROM tbl_products
        WHERE id = :id';
        $statement = $this->connect->prepare($sql);
        $statement->execute([':id' => $id]);
    }
}

?>