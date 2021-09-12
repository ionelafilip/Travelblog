<?php 

class MayaController extends AppController
{
   public function __construct() {
       $this->init();
   }

   public function init() {
    //    echo __FILE__;
    // include APP_PATH.VIEWS.'layout.html';
    
    $data['title'] = 'Riviera Maya';
    echo $this->render(APP_PATH.VIEWS.'maya.html' , $data);

   }
}