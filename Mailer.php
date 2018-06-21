<?php

/**
 *  Class Mailer
 */
abstract class Mailer
{
  public function send($to, $from, $body)
  {

  }
}

/**
 * Class UserMailer
 */
class UserMailer extends Mailer
{
  public function sendWelcomeEmail(User $user)
  {
    return $this->send($user->email);
  }
}



 ?>
