<?php
class veiw
{
    public function __construct()
    {

    }

    public function render($name)
    {
        require 'veiws/'.$name.'.php';
    }
}