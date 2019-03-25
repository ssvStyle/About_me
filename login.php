<?php

session_start();

use \app\classes\View;
/*
if (!isset($_SESSION['admin'])){
    header('Location: /exam.loc');
} else {
*/
    include_once __DIR__ . '/autoload.php';

    $view = new View();
    $view->display('login');
//}