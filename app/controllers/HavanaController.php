<?php 

class HavanaController extends AppController
{
   public function __construct() {
       $this->init();
   }

   public function init() {
    //    echo __FILE__;
    // include APP_PATH.VIEWS.'layout.html';
    
    $data['title'] = 'Havana, Cuba';
    echo $this->render(APP_PATH.VIEWS.'havana.html' , $data);

   }
}