<?php 

class FijiController extends AppController
{
   public function __construct() {
       $this->init();
   }

   public function init() {
    //    echo __FILE__;
    // include APP_PATH.VIEWS.'layout.html';
    
    $data['title'] = 'Mamanuca Islands';
    echo $this->render(APP_PATH.VIEWS.'fiji.html' , $data);

   }
}