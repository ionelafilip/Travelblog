<?php 

// echo 'Sign-Up logic ...';

// $signUpEmail = $_POST['userEmailSignUp'];
// $signUpPass = $_POST['userPassSignUp1'];

// var_dump($_POST);

// $userName = 'myuser';
// $userPass = '123';
// $dbName = 'webdev';
// $conn = new mysqli('localhost', $userName , $userPass, $dbName);
// if($conn->connect_error) {
//     die('error!'.$conn->error);
// }

// $hashedPass = password_hash($signUpPass, PASSWORD_DEFAULT);
// $sql = "INSERT INTO `usersblog`(`userEmail` , `userPass` , `hashedPass`) VALUES ('$signUpEmail' , '$signUpPass' , '$hashedPass')";

// $result = $conn->query($sql); 

// if(!$result) {
//     echo "<h1>Bad query</h1>";
//     // header("Location: ../index.html");
// }
// else 
// {   
//  echo "User added ... redirect to your page!";
//  header("refresh:4; url=../indexAuth.php"); 
// }


// echo 'Sign-Up logic ...';

$signUpEmail = $_POST['userEmailSignUp33'];
$signUpPass = $_POST['userPassSignUp1'];

// var_dump($_POST);

$userName = 'myuser';
$userPass = '123';
$dbName = 'webdev';
$conn = new mysqli('localhost', $userName, $userPass, $dbName);
if($conn->connect_error){
    die('eroare!'.$conn->error); // se oprește execuția scriptului
}

$hashedPass = password_hash($signUpPass, PASSWORD_DEFAULT);

$interogare = "INSERT INTO usersblog (`userEmail`, `userPass`, `hashedPass`) VALUES ('$signUpEmail','$signUpPass','$hashedPass')";

$result = $conn->query($interogare);

if(!$result){
    echo "<h1>Bad query!</h1>";
    header("Location:../index.html");
}
else 
{
 echo "User added ... redirect to your page!";
 header("refresh:4; url=../indexAuth.php");
}
