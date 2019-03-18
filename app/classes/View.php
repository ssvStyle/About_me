<?php

namespace app\classes;
/**
 * Description of View
 *
 * @author ssv
 */
class View
{
    public $data = [];

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }
    
    public function display(string $template)
    {
        $data = $this->data;
        
            if (file_exists('././view/' . $template . '.php')){
                include_once './view/header.php';
                include_once './view/' . $template . '.php';
                include_once './view/footer.php';
            }
        
    }

}
