<?php
// Is required the file autoload.php
require 'vendor/autoload.php';

use App\User\Person;
use App\Bussines;
use App\Staff;

$person = new Person('Jonathan');
$staff = new Staff([$person]);
$bussines = new Bussines($staff);
$bussines->hire(new Person('Cynthia'));

var_dump($bussines->getStaffMembers());


 ?>
