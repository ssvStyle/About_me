<?php
/**
 * Created by PhpStorm.
 * User: ssv
 * Date: 27.03.19
 * Time: 16:09
 */

namespace app\classes;

use app\models\Db;


class Content
{
    private $db;

    public function __construct()
    {
        $this->db = new Db();
    }

    public function getShortTextAbout()
    {
        return mb_substr($this->getTextAbout(),0, 130);
    }

    public function getTextAbout()
    {
        $about = $this->db->query('SELECT text FROM about', []);
        return $about[0]['text'];
    }

    public function getImgList()
    {
        return array_diff(scandir('images/gallery'), ['..', '.']);//убрать
    }

    public function getImgById($id)
    {
        $imgList = $this->getImgList();
        return $imgList[$id];
    }
}