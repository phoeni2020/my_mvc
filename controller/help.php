<?php
class help extends controller
{
    public function __construct()
    {

    }
    public function hi($option =false)
    {
        echo 'hi form function eithr <br>';

        echo 'this is optinal arg '.$option.'<br>';
    }
}