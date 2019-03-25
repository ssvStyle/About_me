<?php
/**
 * Created by PhpStorm.
 * User: ssv
 * Date: 25.03.19
 * Time: 23:55
 */

namespace app\classes;


class GuestBookFormValidation extends Validation
{
    protected $name, $email, $msg;

    public function __construct(array $data)
    {
        $this->name = trim($data['name']);
        $this->email = $data['email'];
        $this->msg = htmlspecialchars(trim($data['message']));
    }

    private function checkName()
    {
        return $this->match('~^([a-zA-Z\' ]+)|([a-zA-Zа-яА-я\' ]+)$~', $this->name);
    }

    private function checkEmail()
    {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }

    public function checkMsg()
    {
        if (mb_strlen($this->msg) < 5){
            return false;
        }
        return true;
    }

    public function getResult()
    {
        return ($this->checkName() && $this->checkEmail() && $this->checkMsg());
    }

    public function getData(){

        return ['name' => $this->name, 'email' => $this->email, 'message' => $this->msg];

    }

    public function getMsg()
    {
        return $this->msg;
    }
}