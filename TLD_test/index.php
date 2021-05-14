<?php

include_once('model/Number.php');
include_once('controller/NumberController.php');
include_once('view/NumberView.php');

$number = new Number();
$number->set($_GET['number']);

$controller = new NumberController($number);
$view = new NumberView($number);

echo $view->printOut($controller->calc());

?>