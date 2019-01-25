<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2019-01-25
 * Time: 11:31
 */

include_once ('Retangle.php');
class Sqare extends Retangle
{
    public $width;
    public function __construct($name,$width)
    {
        parent::__construct($name,$width);
    }
    function calculateArea()
    {
        return $this->width * $this->width;
    }
    function calculatePerimeter()
    {
        return 2 * ($this->width + $this->width);
    }

}
?>