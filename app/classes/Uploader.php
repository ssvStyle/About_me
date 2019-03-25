<?php
/**
 * Created by PhpStorm.
 * User: ssv
 * Date: 23.03.19
 * Time: 2:43
 */

namespace app\classes;

class Uploader
{
    protected $file = [];


    public function __construct($file)
    {
        $this->file = $file;
    }

    public function isUploaded()
    {
        return is_uploaded_file($this->file['tmp_name']);
    }

    public function upload()
    {
        $result = FALSE;

        if ($this->isUploaded()){

            $result = move_uploaded_file($this->file['tmp_name'], __DIR__ . '/../../images/gallery/' . $this->file['name']);

        }

        return $result;
    }
}