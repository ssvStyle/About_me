<?php

session_start();

include_once  __DIR__ . '/autoload.php';

use \app\classes\View;
use \app\classes\Content;

$view = new View();
$content = new Content();

$view->assign('about', $content->getTextAbout());

$view->display('about');