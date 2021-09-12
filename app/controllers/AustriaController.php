<?php 

class AustriaController extends AppController
{
   public function __construct() {
       $this->init();
   }

   public function init() {
    //    echo __FILE__;
    // include APP_PATH.VIEWS.'layout.html';
    
    $data['title'] = 'Austria';
    echo $this->render(APP_PATH.VIEWS.'austria.html' , $data);

   }
}