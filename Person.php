<?php

  /**
   *  Class Person
   */
  class Person
  {
    private $name;
    private $age;

    function __construct($name)
    {
      $this->name = $name;
    }

    public function getAge()
    {
      return $this->age;
    }

    public function setAge($age)
    {
      if ($age < 18) {
        throw new \Exception("Person is not old enough.");
      }
      $this->age = $age;
    }
  }

  $jonh = new Person('jonathan');

  $jonh->setAge(24);

  $jonh->age = 24;

  var_dump($jonh->getAge());


 ?>
