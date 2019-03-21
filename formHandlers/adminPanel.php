<?php
session_start();

//var_dump($_POST);

//var_dump($_FILES);

if (isset($_POST["message"])){
    echo 'Обновляем текст "Обо мне"';
};

if (isset($_POST["addFile"]) && $_FILES["newFile"]['error'] !== 4){
    echo 'Добавляем фото';
};

if (isset($_POST["deleteRec"])){
    echo 'Удаляем запись гостевой';
};
