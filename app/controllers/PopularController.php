<?php 

class PopularController extends AppController
{
   public function __construct() {
       $this->init();
   }

   public function init() {
    //    echo __FILE__;
    // include APP_PATH.VIEWS.'layout.html';
    
    $data['title'] = 'Popular destinations';
    echo $this->render(APP_PATH.VIEWS.'populardestinations.html' , $data);

   }
}