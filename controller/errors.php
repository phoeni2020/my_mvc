<?php
class errors extends controller
{
    public function __construct()
    {
        echo 'this is error controllr<br>';
        parent::__construct();
        $this->veiw->msg='that page dosent exists';
        $this->veiw->render("index/index");
    }
}