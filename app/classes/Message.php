<?php

namespace app\classes;
/**
 * Description of Massage
 *
 * @author ssv
 */
class Message
{
    protected $message = [];

    public function __construct(array $msg)
    {
        $this->message = $msg;
    }

    public function getMsg()
    {
        return $this->message['message'];
    }

    public function getName()
    {
        return $this->message['name'];
    }

    public function getDate()
    {
        return $this->message['DateTime'];
    }

    public function getNameAndMsg()
    {
        return ['name' => $this->getName(), 'message' => $this->getMsg()];
    }

    public function getId()
    {
        return $this->message['id'];
    }
}
