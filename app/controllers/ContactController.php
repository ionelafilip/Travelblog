<?php 

class ContactController extends AppController
{
   public function __construct() {
       $this->init();
   }

   public function init() {
    session_start();
    if(isset($_SESSION['user'])) {
        $data['title'] = 'My account';
        echo $this->render(APP_PATH.VIEWS.'contact.html', $data);
    }
    else {
        $data['title'] = 'Contact';
        echo $this->render(APP_PATH.VIEWS.'contact.html' , $data);
       }
   }
}