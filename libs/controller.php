<?php
class controller
{
     public function __construct()
     {
         /*
          * make a new object from veiw class
          * because every controller gonna extends form this class
          * so it's gonna requset the function __construct()
          * to make new object from class veiw to make easy to deal with it
          */
         $this->veiw = new veiw();
     }
}