<?php

session_start();

include_once  __DIR__ . '/autoload.php';

use app\classes\GuestBook;
use app\models\DB;
use app\classes\Admin;
use app\classes\UserValidation;


$db = new DB();
$guestbookRecord = new GuestBook();

$about = $db->query('SELECT text FROM about', []);

include_once 'view/adminPanel.php';



/***************************************************************************************************************/

$usValid = new UserValidation('ssv-style', '123456');


$user = $db->query('SELECT * FROM users WHERE id IN (SELECT admin FROM roles WHERE admin != 0)', []);
//$user = $db->query('SELECT admin FROM roles WHERE admin != 0,[]);
var_dump($usValid->getResult());