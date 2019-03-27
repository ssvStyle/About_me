<?php

session_start();

include_once __DIR__ . '/autoload.php';

use app\classes\GuestBook;
use app\classes\Content;

if (isset($_SESSION['Admin'])) {
    $guestBookRecord = new GuestBook();
    $content = new Content();

    include_once __DIR__ . '/view/adminPanel.php';
} else {
    header('Location: /exam.loc');
}