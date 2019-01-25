<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 25/01/2019
 * Time: 16:14
 */
include_once "Shape.php";
class Triangle extends Shape
{
    public $color;
    public $side1;
    public $side2;
    public $side3;

    public function __construct($name,$color,$side1=1.0,$side2=1.0,$side3=1.0)
    {
        parent::__construct($name);
        $this->color = $color;
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getSide1()
    {
        return $this->side1;
    }


    public function getSide2()
    {
        return $this->side2;
    }

    public function getSide3()
    {
        return $this->side3;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }

    public function setSide2($side2)
    {
        $this->side2 = $side2;
    }

    public function setSide3($side3)
    {
        $this->side3 = $side3;
    }

    public function tinhChuvi(){
        return $this->side1 + $this->side2 + $this->side3;
    }
    public function tinhDientich(){
        return sqrt(($this->tinhChuvi()/2)*($this->tinhChuvi()/2-$this->side1)
            *($this->tinhChuvi()/2-$this->side2)*($this->tinhChuvi()/2-$this->side3));
    }
    public function __toString()
    {
       return "<h3>Name: ".$this->name."</h3>Color: ".$this->color."<br>Perimeter: "
           .$this->tinhChuvi()."<br>Area: ".$this->tinhDientich();
    }
}