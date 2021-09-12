<?php 

class NenetController extends AppController
{
   public function __construct() {
       $this->init();
   }

   public function init() {
    //    echo __FILE__;
    // include APP_PATH.VIEWS.'layout.html';
    
    $data['title'] = 'Nenet Nomad';
    echo $this->render(APP_PATH.VIEWS.'nenetstory.html' , $data);

   }
}