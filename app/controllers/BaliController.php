<?php 

class BaliController extends AppController
{
   public function __construct() {
       $this->init();
   }

   public function init() {
    //    echo __FILE__;
    // include APP_PATH.VIEWS.'layout.html';
    
    $data['title'] = 'Bali';
    echo $this->render(APP_PATH.VIEWS.'bali.html' , $data);

   }
}