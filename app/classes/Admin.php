<?php

namespace app\classes;
use app\models\Db;


class Admin
{
    private $id, $secondName;
    protected $db;

    public function __construct(array $userData)
    {
        //$this->db = new Db;
        $this->id = $userData['id'];
        $this->firstName = $userData['firstName'];
        $this->secondName = $userData['secondName'];

    }

    public function saveTextAbout(string $about)
    {
        //$this->db->query('UPDATE about SET text='.htmlspecialchars($about).'WHERE id=0', []);
    }

    public function addImg(Upload $upload)
    {
        //$upload->save();
    }

    public function delGuestBookMsg(int $id)
    {
        //$this->db->query('DELETE FROM guestbook WHERE id='.$id, []);
    }
}