<?php

/**
 * Class Mother
 */
class Mother
{

  function __construct()
  {
    # code...
  }

  public function getEyeCount()
  {
    return 2;
  }
}

/**
 * Class Child extends class mother
 */
class Child extends Mother
{

  function __construct()
  {
    # code...
  }
}


(new Child)->getEyeCount();


?>
