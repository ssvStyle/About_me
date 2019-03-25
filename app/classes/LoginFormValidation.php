<?php

namespace app\classes;


class LoginFormValidation extends Validation
{
    private $login, $pass;

    public function __construct(string $login, string $pass)
    {
        $this->login = $login;
        $this->pass = $pass;
    }

    private function checkLogin()
    {
        return $this->match('~^[a-zA-Z]{1}[a-zA-Z0-9_.-]{2,20}$~', $this->login);
    }

    private function checkPass()
    {
        return $this->match('~^.{3,15}$~', $this->pass);
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function getResult()
    {
        if ($this->checkLogin() && $this->checkPass()){
            return true;
        }
        return false;
    }
}