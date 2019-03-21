<?php

session_start();

include_once  __DIR__ . '/autoload.php';

use \app\classes\View;
use app\classes\GuestBook;

$guestbookRecord = new GuestBook();

$view = new View();
$view->assign('guestbook', $guestbookRecord);
$view->display('guestbook');