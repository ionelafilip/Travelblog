<?php 

class IndonesiaController extends AppController
{
   public function __construct() {
       $this->init();
   }

   public function init() {
    //    echo __FILE__;
    // include APP_PATH.VIEWS.'layout.html';
    
    $data['title'] = 'Indonesia';
    echo $this->render(APP_PATH.VIEWS.'indonesia.html' , $data);

   }
}