<?php

namespace app\classes;

include __DIR__ . '/../../autoload.php';

use app\models\Db;


class Admin
{
    private $id, $firstName, $secondName, $db;
    protected $adminPanel;

    public function __construct(array $userData)
    {
        $this->adminPanel = new AdminForm();
        $this->id = $userData['id'];
        $this->firstName = $userData['firstName'];
        $this->secondName = $userData['secondName'];
        $this->db = new Db();

    }

    public function saveTextAbout(string $about)
    {
        $this->adminPanel->updateTextAbout($about);
    }

    public function addImg()
    {
        $this->adminPanel->uploadImg();
    }

    public function delGuestBookMsg($id)
    {
        $this->adminPanel->delRecFromGuestBook($id);
    }
}