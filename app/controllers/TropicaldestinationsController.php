<?php 

class TropicaldestinationsController extends AppController
{
   public function __construct() {
       $this->init();
   }

   public function init() {
    
    $data['title'] = 'Tropical destinations';
    echo $this->render(APP_PATH.VIEWS.'tropicaldestinations.html' , $data);

   }
}

?>