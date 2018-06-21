<?php

/**
 * Interface animal
 */
interface Logger
{
  public function excute($message);
}

/**
 *  Class Dog
 */
class LoggerToFile implements Logger
{
  public function excute($message)
  {
    var_dump('Log the message to a file '. $message);
  }
}

/**
 *  Class Cat
 */
class LoggerToDatabase implements Logger
{
  public function excute($message)
  {
    var_dump('Log the message to a database '. $message);
  }
}

/**
 *
 */
class UsersController
{
  protected $logger;

  public function __construct(Logger $logger) {
    $this->logger = $logger;
  }
  public function show()
  {
    $user = "Jonathan";

    $this->logger->excute($user);

  }
}

$user = new UsersController(new LoggerToDatabase);

$user->show();

 ?>
