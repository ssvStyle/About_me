<?php
/**
 * Created by PhpStorm.
 * User: ssv
 * Date: 25.03.19
 * Time: 10:37
 */

namespace app\classes;
use app\models\Db;


class AdminForm
{
    private $db;

    public function __construct()
    {
        $this->db = new Db;
    }

    public function updateTextAbout(string $about)
    {
        $this->db->query('UPDATE about SET text=:text WHERE id=1', [':text' => htmlspecialchars($about)]);
    }

    public function delRecFromGuestBook(int $id)
    {
        $this->db->query('DELETE FROM guestbook WHERE id=:id', ['id' => $id]);
    }

    public function uploadImg()
    {
        $uploader = new Uploader($_FILES["newFile"]);
        return $uploader->upload();
    }
}