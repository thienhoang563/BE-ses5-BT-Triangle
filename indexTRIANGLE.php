<?php
include_once "Shape.php";
include_once "Triangle.php";

$triangle = new Triangle('Triangle 1','red',3,4,5);
echo $triangle->__toString();