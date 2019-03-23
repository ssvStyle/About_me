<?php
/**
 * Created by PhpStorm.
 * User: ssv
 * Date: 22.03.19
 * Time: 23:59
 */

namespace app\classes;


class Admin extends User
{
    private $id;
    protected $db;

    public function __construct(DB $db)
    {
        $this->db = $db;
    }

    public function saveTextAbout(string $about)
    {
        $this->db->query('UPDATE about SET text='.htmlspecialchars($about).'WHERE id=0', []);
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