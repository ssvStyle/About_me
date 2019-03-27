<?php

session_start();

include_once  __DIR__ . '/autoload.php';

use \app\classes\View;
use \app\classes\Content;

$view = new View();
$content = new Content();

$view->assign('content', $content);

if (isset($_GET['img']) && $_GET['img'] <= count($content->getImgList())+1){

    $view->display('photo');

} else {
    $view->display('photography');
}