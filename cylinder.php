<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2019-01-25
 * Time: 09:12
 */

include_once('circle.php');

class cylinder extends cricle
{
    public $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }
    public function calculateArea()
{
    return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
}
    public function calculateVolum()
    {
        return parent::calculateArea()*2;
    }

}
?>