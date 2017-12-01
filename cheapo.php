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
  $logout = $_POST["logout"];

  //indicate read messages
  $readID = $_POST["read_id"];

  //logging out
  if ($lgout="true"){
    session_unset();
    session_destroy();
  }

  //Sign up
  if(isset($username) && isset($password) && isset($first_name) && ($last_name)){
    $sql = "INSERT INTO users(firstname, lastname, username, password) VALUES('$f_name', '$l_name', '$u_name', '$pword');";
    $connect->exec($sql);

    echo 'User added and can now use CheapoMail.';
  }
  //login
  if(isset($username) && isset($password)){
    $sql = "SELECT * FROM Users WHERE username = '$loginusername' AND password = '$loginpasswordpword';";
    $stmt = $connect->query($sql);
    $res = $stmt->fetch();

    if($res != null){
        $_SESSION["username"] = $res["username"];
        $_SESSION["userID"] = $res["ID"];
        echo "User found";
    }
    else{
        echo "User not found. Search Again.";
    }
  }
  //Messages read
  if(isset($user_id)){
    c
    $sql = "INSERT INTO message_read(read_id,message_id) VALUES('$readID','')"
    $connect->exec($sql);
  }


?>
