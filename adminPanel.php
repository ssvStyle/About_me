<?php

session_start();

include_once __DIR__ . '/autoload.php';

use app\classes\GuestBook;
use app\models\Db;

if (isset($_SESSION['Admin'])) {
    $db = new Db();
    $guestBookRecord = new GuestBook();

    $about = $db->query('SELECT text FROM about', []);

    include_once __DIR__ . '/view/adminPanel.php';
} else {
    header('Location: /exam.loc');
}