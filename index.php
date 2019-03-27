<?php

session_start();

include_once  __DIR__ . '/autoload.php';

use \app\classes\View;
use \app\classes\Content;


$content = new Content();

$view = new View();
$view->assign('content', $content);
$view->display('index');