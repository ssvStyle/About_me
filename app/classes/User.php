<?php
/**
 * Created by PhpStorm.
 * User: ssv
 * Date: 20.03.19
 * Time: 22:15
 */

namespace app\classes;


class User
{
    private $name;
    private $email;

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function sendMessage(string $msg)
    {
        //$this->email = $email;
    }
}