<?php


require_once 'controller/controller.php';
require_once 'model/model.php';
require_once 'view/view.php';
//initiate the triad

$model = new Model();

//It is important that the controller and the view share the model

$controller = new Controller($model);

$view = new View($model);

echo $view->output();

// $this.output(); = $this->output();