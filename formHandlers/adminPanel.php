<?php
include __DIR__.'/../app/classes/Admin.php';
session_start();

use app\classes\Admin;

if (isset($_SESSION['Admin'])) {
    $admin = new Admin($_SESSION['Admin']);

    if (isset($_POST["updateTextAbout"])) {
        $admin->saveTextAbout($_POST['message']);
    };

    if (isset($_POST["addFile"]) && $_FILES["newFile"]['error'] !== 4) {
        $admin->addImg();
    };

    if (isset($_POST["deleteRec"])) {
        $admin->delGuestBookMsg((int)($_POST['id']));
    };
}