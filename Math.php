<?php

/**
 * Class Person
 */
class Person
{
  public static $age = 1;

  public function haveBirthday()
  {
    static::$age += 1;
  }
}


/**
 * Class Math
 */
class Math
{
  public static function add(...$nums)
  {
    return array_sum($nums);
  }
}

$math = new Math;
echo $math::add(1,2,3,4);
var_dump($math->add(1,2,3,4,5));


$jonh = new Person;
$jonh->haveBirthday();

echo Person::$age;

/**
 * BankAcount
 */
class BankAcount
{
  const TAX = .09;
}

echo BankAcount::TAX;

 ?>
