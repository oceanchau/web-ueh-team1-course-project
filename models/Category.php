<?php
class Category {
    public $id;
    public $name;
    public $img;

    /**
     * @param $id
     * @param $name
     */
    public function __construct($id, $name, $img)
    {
        $this->id = $id;
        $this->name = $name;
        $this->img = $img;
    }

    static function all(): array
    {
        $list = [];
        $db = DatabaseConfig::getInstance();
        $req = $db->query('SELECT * FROM tbl_categories');

        foreach ($req->fetchAll() as $item) {
            $list[] = new Category($item['id'], $item['name'], $item['img']);
        }

        return $list;
    }
}