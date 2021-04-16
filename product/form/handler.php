<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler(); 

$validator = $pp->getValidator();
$validator->fields(['name','email'])->areRequired()->maxLength(150);
$validator->field('email')->isEmail();
$validator->field('message')->maxLength(6000);
$validator->field('number')->maxLength(10);
$validator->field('address')->maxLength(6000);




$pp->sendEmailTo('chattopadhyay.soumyadip78@gmail.com'); // ← Your email here

echo $pp->process($_POST);