<?php

session_start();

include_once  __DIR__ . '/autoload.php';

use \app\classes\View;

$view = new View();
$view->display('login');