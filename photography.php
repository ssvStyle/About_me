<?php

session_start();

include_once  __DIR__ . '/autoload.php';

use \app\classes\View;

$imgList = array_diff(scandir('images/gallery'), ['..', '.']);

$view = new View();
$view->assign('imgList', $imgList);

if (isset($_GET['img']) && $_GET['img'] <= count($imgList)+1){

    $view->display('photo');

} else {
    $view->display('photography');
}