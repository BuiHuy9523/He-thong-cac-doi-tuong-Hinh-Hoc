<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2019-01-25
 * Time: 08:35
 */

class Shape
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        return "I'm shape. My name is $this->name";
    }
}

?>