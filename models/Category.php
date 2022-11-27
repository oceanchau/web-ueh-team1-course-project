<?php
class Category {
    public $id;
    public $name;
    public $active;

    /**
     * @param $id
     * @param $name
     * @param $active
     */
    public function __construct($id, $name, $active)
    {
        $this->id = $id;
        $this->name = $name;
        $this->active = $active;
    }

    static function all(): array
    {
        $list = [];
        $db = DatabaseConfig::getInstance();
        $req = $db->query('SELECT * FROM tbl_categories');

        foreach ($req->fetchAll() as $item) {
            $list[] = new Category($item['id'], $item['name'], $item['active']);
        }

        return $list;
    }
}