<?php
class Category {
    public $id;
    public $name;
    public $active;
    public $img;

    /**
     * @param $id
     * @param $name
     * @param $active
     */
    public function __construct($id, $name, $active, $img)
    {
        $this->id = $id;
        $this->name = $name;
        $this->active = $active;
        $this->img = $img;
    }

    static function all(): array
    {
        $list = [];
        $db = DatabaseConfig::getInstance();
        $req = $db->query('SELECT * FROM tbl_categories WHERE active = 1');

        foreach ($req->fetchAll() as $item) {
            $list[] = new Category($item['id'], $item['name'], $item['active'], $item['img']);
        }

        return $list;
    }
}