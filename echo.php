<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2019-01-25
 * Time: 11:40
 */

include_once ('circle.php');
include_once ('cylinder.php');
include_once ('Retangle.php');
include_once ('Sqare.php');

$circle1 = new cricle('circle1', 3);
echo "Dien tich circle la:" .$circle1->calculateArea()."</br>";
echo "Chu vi circle la:".$circle1->calculatePerimeter();

$cylinder1 = new cylinder('cylinder1',5,7);
echo "dien tich cylinder la:" .$cylinder1->calculateArea(). "</br>";
echo "chu vi cua cylinder la:". $cylinder1->calculatePerimeter()."</br>";

$retangle = new Retangle('retangle', 10,12);
echo "dien tich cua hinh chu nhat la:".$retangle->calculateArea()."<br>";
echo "chu vu cua hinh chu nhat la: ".$retangle->calculatePerimeter()."<br>";

$square = new Sqare('hinhvuong',10);
echo "dien tich hinh vuong la: ".$square->calculateArea()."<br>";
echo "chu vi hinh vuong la: ".$square->calculatePerimeter()."<br>";