<?php

/**
 *  Class Task
 */
class Task
{

  public $description;
  function __construct($description)
  {
    $this->description = $description;
  }
}

// Define a object of class Task
$task = new Task('Aprendiendo OPP');
$task2 = new Task('This is the task 2');
var_dump($task2->description);


 ?>
