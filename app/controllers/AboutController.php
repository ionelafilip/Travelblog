<?php 

class AboutController extends AppController
{
   public function __construct() {
       $this->init();
   }

   public function init() {
    session_start();
    if(isset($_SESSION['user'])) {
        $data['title'] = 'My account';
        // $data['mainContent'] = ""
        echo $this->render(APP_PATH.VIEWS.'about.html', $data);
    }
    else {
        $data['title'] = 'About';
        echo $this->render(APP_PATH.VIEWS.'about.html' , $data);
       }

   }
}