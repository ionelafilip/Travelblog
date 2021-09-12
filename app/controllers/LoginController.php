<?php 

class LoginController extends AppController
{
   public function __construct() {
       $this->init();
   }

   public function init() {
    $userEmail = $_POST['userEmail'];
    $userPass = $_POST['userPass'];
    
    $user = new UsersModel;
    $sql = "SELECT * FROM usersblog WHERE `userEmail` = '$userEmail' ";
    $result = $user->db()->query($sql);
    $dataArray = $result->fetch_assoc();

    $hash = $dataArray['hashedPass'];
    $data = array();
    if(password_verify($userPass, $hash)) {
          // echo "<h1 style='color:green'>You are logged in!</h1>";
          session_start();
          $_SESSION['user'] = $userEmail;
        //   header("refresh:4; url=../indexAuth.php");
        $data['title'] = 'My account';
        // $data['mainContent'] = :"<h1>Salut, $userEmail</h1>"
        echo $this->render(APP_PATH.VIEWS.'layoutAuth.php', $data);
       }
       else {
          echo '<h1 style="color:red">You are NOT logged in!</h1>';
          echo $this->render(APP_PATH.VIEWS.'layout.html', $data);
        }
    }
}