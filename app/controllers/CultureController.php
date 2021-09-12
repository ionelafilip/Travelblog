<?php 

class CultureController extends AppController
{
   public function __construct() {
       $this->init();
   }

   public function init() {
    
    $data['title'] = 'CULTURE';
    echo $this->render(APP_PATH.VIEWS.'culture.html' , $data);

   }
}

?>