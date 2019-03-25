<?php

include __DIR__ . '/../autoload.php';

use \app\classes\GuestBook;
use \app\classes\Message;
use \app\classes\GuestBookFormValidation;

if (isset($_POST['send'])){
    $guestBookFormValidation = new GuestBookFormValidation($_POST);
    if ($guestBookFormValidation->getResult()) {
        $newMsg = new Message($guestBookFormValidation->getData());
        $guestbook = new GuestBook();
        $guestbook->append($newMsg);
        $guestbook->save();
        header('Location: /exam.loc/guestbook.php');
    }
}