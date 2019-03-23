<?php
/**
 * Created by PhpStorm.
 * User: ssv
 * Date: 23.03.19
 * Time: 2:34
 */

namespace app\classes;


class Validation
{
    protected function match(string $pattern, string $subject)
    {
        return (bool)(preg_match($pattern, $subject));
    }
}