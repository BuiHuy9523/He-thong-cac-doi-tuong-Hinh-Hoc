<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2019-01-25
 * Time: 11:24
 */

include_once ('Shape.php');
class Retangle extends Shape
{
    public $width;
    public $height;
    public function __construct($name,$width,$height)
    {
        $this->width=$width;
        $this->height=$height;
        parent::__construct($name);
    }
    function calculateArea()
    {
        return $this->width * $this->height;
    }
    function calculatePerimeter()
    {
        return 2 * ($this->width + $this->height);
    }
}
?>