<?php 

class AfghanistanController extends AppController
{
   public function __construct() {
       $this->init();
   }

   public function init() {
    //    echo __FILE__;
    // include APP_PATH.VIEWS.'layout.html';
    
    $data['title'] = 'Afghanistan';
    echo $this->render(APP_PATH.VIEWS.'afghanistan.html' , $data);

   }
}