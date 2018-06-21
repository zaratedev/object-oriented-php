<?php

/**
 *  Class Task
 */
class Task
{
  public $description;
  public $completed = false;

  function __construct($description)
  {
    $this->description = $description;
  }

  public function complete()
  {
    $this->completed = true;
  }
}

// Define a object of class Task
$task = new Task('Aprendiendo OPP');
$task->complete();
var_dump($task->completed);


 ?>
