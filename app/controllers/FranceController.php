<?php 

class FranceController extends AppController
{
   public function __construct() {
       $this->init();
   }

   public function init() {
    $data['title'] = 'France';
    echo $this->render(APP_PATH.VIEWS.'france.html' , $data);
   }
}