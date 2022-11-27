<?php

class Level
{
    public $id;
    public $controller;
    public $action;
    public $name;

    /**
     * @param $page
     * @param $action
     * @param $name
     */
    public function __construct($controller, $action, $name)
    {
        $this->controller = $controller;
        $this->action = $action;
        $this->name = $name;
    }

    /**
     * @param mixed $id
     * @return Level
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}

?>