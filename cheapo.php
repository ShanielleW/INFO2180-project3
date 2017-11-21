<?php

//Start session
session_start();
$servername = getenv('IP');
$username = "username";
$password = '';
$dbname = 'cheapomail';



try{
$conn = new PDO($mysql:servername=$servername;dbname=$dbname, $username, $password);
}
catch(PDOException $e){
  echo $e;
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  //user to be added
  $f_name = $_POST["firstname"];
  $l_name = $_POST["lastname"];
  $u_name = $_POST["username"];
  $pword = md5($_POST["password"]);

  $loginusername = $_POST["loginname"];
  $loginpassword = sha1($_POST['loginpassword']);

  //indicate logout
  $lgout = $_POST["logout"];

  if(isset($u_name) && isset($pword) && isset($f_name) && ($l_name)){
    $sql = "INSERT INTO "
  }
}



?>
