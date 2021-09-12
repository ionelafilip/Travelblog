<?php 

class HomeController extends AppController
{
   public function __construct() {
       $this->init();
   }

   public function init() {
    session_start();
    if(isset($_SESSION['user'])) {
        $data['title'] = 'My account';
        echo $this->render(APP_PATH.VIEWS.'layoutAuth.php', $data);
    }
    else {
        $data['title'] = 'Home';
        echo $this->render(APP_PATH.VIEWS.'layout.html' , $data);
       }
   }

}