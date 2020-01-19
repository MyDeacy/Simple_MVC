<?php

use mvc\controller\Controller;

require_once "vendor/autoload.php";

$controller = new Controller();
$page = $controller->control($_POST);

include_once($page);
