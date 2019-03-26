<?php

session_start();

use \app\classes\View;

    include_once __DIR__ . '/autoload.php';

    $view = new View();
    $view->display('login');