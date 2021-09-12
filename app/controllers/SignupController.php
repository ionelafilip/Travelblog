<?php 

class SignupController extends AppController
{
   public function __construct() {
       $this->init();
   }

   public function init() {
    $signUpEmail = $_POST['userEmailSignUp33'];
    $signUpPass = $_POST['userPassSignUp1'];  
    $user = new UsersModel;
    
    $data = array();
        if($user->addUser( $signUpEmail, $signUpPass)){
            echo "<h1>Bad query!</h1>";
            echo $this->render(APP_PATH.VIEWS.'layout.html',$data);
        }
        else {
            // echo "User added ... redirect to your page!";
            session_start();
            $_SESSION['user'] =  $signUpEmail;
            echo $this->render(APP_PATH.VIEWS.'layoutAuth.php',$data);
        }  

   }
}