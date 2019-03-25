<?php
/**
 * Created by PhpStorm.
 * User: ssv
 * Date: 20.03.19
 * Time: 22:16
 */

namespace app\classes;
use app\models\Db;


class Authorization
{
    private $login;
    private $pass;
    private $user = [];
    private $db;

    public function __construct(loginFormValidation $loginFormValidation)
    {
        $this->db = new Db();
        $this->login = $loginFormValidation->getLogin();
        $this->pass = $loginFormValidation->getPass();
        $this->user = $this->userExist();
    }

    public function activateSession()
    {
        if ($this->userExistAndPassValid()){
            $_SESSION['Admin']['id'] = $this->user['id'];
            $_SESSION['Admin']['login'] = $this->user['login'];
            $_SESSION['Admin']['firstName'] = $this->user['firstName'];
            $_SESSION['Admin']['secondName'] = $this->user['secondName'];
        }
    }

    private function userExistAndPassValid()
    {
        if(!empty($this->user)){
            if(password_verify($this->pass, $this->user['pass'])){
                return true;
            }
            $_SESSION['error'][] = 'Не верный пароль...';
        }
    }

    private function userExist()
    {
        $user = $this->db->query('SELECT * FROM users WHERE login=:login', ['login'=> $this->login]);
            if (empty($user)){
                $_SESSION['error'][] = 'Пользователя с таким логином не существует';
                return false;
            }
        return $user[0];
    }
}