<?php
class index extends controller
{
    public function __construct()
    {
       parent::__construct();
       $this->veiw->render('index/index');
    }
}