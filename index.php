<?php

session_start();

include_once  __DIR__ . '/autoload.php';

use \app\classes\View;
use \app\models\Db;

$db = new Db();
$about = $db->query('SELECT text FROM about', []);

$view = new View();
$view->assign('about', mb_substr($about[0]['text'],0, 130));
$view->display('index');