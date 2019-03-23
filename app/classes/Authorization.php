<?php
/**
 * Created by PhpStorm.
 * User: ssv
 * Date: 20.03.19
 * Time: 22:16
 */

namespace app\classes;


class Authorization
{
    private $login;
    private $pass;
    private $user;

    public function __construct($login, $pass)
    {
        $validationLoginPass = new UserValidation($login, $pass);

        if ($validationLoginPass->getResult()){
        $this->login = $login;
        $this->pass = $pass;
        }
    }

    public function activateSession()
    {
        $_SESSION[$this->user] = $this->user;
    }

    public function name()
    {

    }
}