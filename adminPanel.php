<?php

session_start();

include_once __DIR__ . '/autoload.php';

use app\classes\GuestBook;
use app\models\Db;



    $db = new Db();
    $guestBookRecord = new GuestBook();

    $about = $db->query('SELECT text FROM about', []);

    include_once 'view/adminPanel.php';