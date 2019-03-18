<?php

include_once  __DIR__ . '/autoload.php';

use \app\classes\View;

$test = new View();

$test->display('index');