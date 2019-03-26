<?php

session_start();
include __DIR__ . '/../autoload.php';

use app\classes\LoginFormValidation;
use app\classes\Authorization;

if (isset($_POST['signin'])){
    $formValidation = new LoginFormValidation($_POST["login"], $_POST["pass"]);
        if ($formValidation->getResult()){
            $auth = new Authorization($formValidation);
            $auth->activateSession();
            var_dump($_SESSION);
            header('location: /exam.loc/adminPanel.php');
        } else {
            header('location: /exam.loc/login.php');
        }
}