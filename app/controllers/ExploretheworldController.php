<?php 

class ExploretheworldController extends AppController
{
   public function __construct() {
       $this->init();
   }

   public function init() {
    
    $data['title'] = 'Explore the world';
    echo $this->render(APP_PATH.VIEWS.'exploretheworld.html' , $data);

   }
}

?>