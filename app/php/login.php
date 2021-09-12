<?php

$userName = 'myuser';
$userPass = '123';
$dbName = 'webdev';

// variabila conexiune
$conn = new mysqli('localhost', $userName , $userPass, $dbName);

if($conn->connect_error) {
    die('error!'.$conn->error);
}
// else echo 'Connection ok';

$sql = "SELECT * FROM usersblog";
$result = $conn->query($sql);

$dataArray = $result->fetch_all(MYSQLI_ASSOC);

// var_dump($_POST);

// echo '<pre>';
// var_dump($dataArray);
// echo '</pre>';


$userEmail = $_POST['userEmail'];
$userPass = $_POST['userPass'];
// User authentification
$sql = "SELECT * FROM usersblog WHERE `userEmail` = '$userEmail' ";
$result = $conn->query($sql);
$dataArray = $result->fetch_assoc();

// echo '<pre>';
// var_dump($dataArray);
// echo '</pre>';


// $hash = $dataArray['hashedPass'];
// if(password_verify($userPass,  $hash)) {
//     echo "<h1 style='color:green'>You are logged in!";
//     session_start();
//     $_SESSION[$userEmail] = 'logged-in';
//     header("refresh:3; url=../indexAuth.html");
// }
//    else {
//     echo '<h1 style="color:red">You are NOT logged in!';
//     header("refresh:3; url=../index.html");
// }

$hash = $dataArray['hashedPass'];
if(password_verify($userPass, $hash)) {
    echo "<h1 style='color:green'>You are logged in!";
    session_start();
    $_SESSION[$userEmail] = 'logged-in';
    header("refresh:4; url=../indexAuth.php");
}
else {
    echo '<h1 style="color:red">You are NOT logged in!';
    header("refresh:4; url=../index.html");
}





