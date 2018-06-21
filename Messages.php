<?php

/**
 * Class Person
 */
class Person
{
  protected $name;

  public function __construct($name) {
    $this->name = $name;
  }
}

/**
 * Class Bussines
 */
class Bussines
{
  protected $staff;

  public function __construct(Staff $staff)
  {
    $this->staff = $staff;
  }

  public function hire(Person $person)
  {
    // add $person to the staff collection
    $this->staff->add($person);
  }

  public function getStaffMembers()
  {
    return $this->staff->members();
  }
}

/**
 * Class Staff
 */
class Staff
{
  protected $members = [];

  public function __construct($members = [])
  {
    $this->members = $members;
  }

  public function add(Person $person)
  {
    $this->members[] = $person;
  }

  public function members()
  {
    return $this->members;
  }

}


$person = new Person('Jonathan');
$staff = new Staff([$person]);
$bussines = new Bussines($staff);
$bussines->hire(new Person('Cynthia'));

var_dump($bussines->getStaffMembers());


 ?>
