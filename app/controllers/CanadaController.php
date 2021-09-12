<?php 

class CanadaController extends AppController
{
   public function __construct() {
       $this->init();
   }

   public function init() {
    $data['title'] = 'Canada';
    echo $this->render(APP_PATH.VIEWS.'canada.html' , $data);
   }
}