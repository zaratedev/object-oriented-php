<?php

/**
 *  Class Task
 */
class Task
{

  public $description = 'This is a description';
  function __construct()
  {
    # code...
  }
}

// Define a object of class Task
$task = new Task();

var_dump($task->description);


 ?>
