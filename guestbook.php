<?php

include_once  __DIR__ . '/autoload.php';

use \app\classes\View;
use app\classes\GuestBook;

$guestbookRecord = new GuestBook();

//var_dump($guestbookRecord);

$test = new View();

$test->assign('guestbook', $guestbookRecord);

$test->display('guestbook');