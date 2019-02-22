<?php

spl_autoload_register(function ($class_name) {
  include 'classes/' . $class_name . '.php';
});

require_once "classes/Ago.php";

$operation = 'list';
if(isset($_GET['op']) && method_exists('Controller', $_GET['op']))
  $operation = $_GET['op'];

Controller::$operation();

?>