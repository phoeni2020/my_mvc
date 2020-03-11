<?php
class Bootstrap
{
    public function __construct()
    {
        // check for routs
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $nurl =rtrim($url,'/');
        // make an array every route come after / in the url is a value into the array
        $url = explode('/',$nurl);
        //check if the array is empty or not
        if (empty($url[0]))
        {
            /* if the array of url[0] is empty make a
             *new object of class index to init the constrcut
             * and set the msg of view with err msg to echo it
            */
            require 'controller/index.php';
            $controller = new index();
            // to stop any code after this if
            return false;
        }
        // make a string path to specific controller
        $file =  'controller/'.$url[0].'.php';
        // if the file found require it
        if(file_exists($file))
        {
            require $file;
        }
        else
        {
            // if the rout the user use it not exists
            require 'controller/index.php';
            $err = new index();
            return false;
        }
        //make a dynamic new object form the rout form the url
        $controller = new $url[0];
        //check the index 2 into array url found or not that index is argument gonna pass it to the function
        if (isset($url[2])) {
        // passing the value located into index 2 to the function locate it's name locate into index 1
            $controller->{$url[1]}($url[2]);
        } else {
            if (isset($url[1])) {
                $controller->{$url[1]}();
            }
        }
    }
}