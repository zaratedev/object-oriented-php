<?php

/**
 * Class Shape
 */
abstract class Shape
{
  protected $color = "red";

  public function __construct($color) {
    $this->color = $color;
  }

  public function getColor()
  {
    return $this->color;
  }

  abstract protected function getArea();
}

/**
 *
 */
class Square extends Shape
{
  protected $length = 4;

  public function getArea()
  {
    return pow($this->length, 2);
  }
}

/**
 *
 */
class Triangle extends Shape
{
  protected $base = 4;
  protected $height = 7;

  public function getArea()
  {
    return .5 * $this->base * $this->height;
  }
}

/**
 *
 */
class Circle extends Shape
{
  protected $radius = 5;

  public function getArea()
  {
    return M_PI * pow($this->radius, 2);
  }
}

$circle = new Circle("red");

echo $circle->getArea();
 ?>
