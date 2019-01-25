<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2019-01-25
 * Time: 08:42
 */
include_once('Shape.php');

class cricle extends Shape
{
    public $radius;

    public function __construct($name,$radius)
    {
        $this->radius= $radius;
        parent::__construct($name);
    }
    function calculateArea()
    {
        return pi() * $this->radius**2;
    }
    function calculatePerimeter()
    {
        return (pi()*$this->radius*2);
    }
}

?>
