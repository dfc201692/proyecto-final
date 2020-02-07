<?php
sleep(3);
session_start();
$connect = mysqli_connect("localhost","root","","proyecto");

if(isset($_POST["username"]) && isset($_POST["password"])){
  $username = mysqli_real_escape_string($connect, $_POST["username"]);
  $password = mysqli_real_escape_string($connect,  md5($_POST["password"]));
  $sql = "SELECT username,id,rol, codigo_proyecto FROM usuarios WHERE username='$username' AND password='$password' GROUP BY username";
  $result = mysqli_query($connect, $sql);
  $num_row = mysqli_num_rows($result);
  if ($num_row == "1") {
    $data = mysqli_fetch_array($result);
    $_SESSION["username"] = $data["username"];
	$_SESSION["id_user"] = $data["id"];
    $_SESSION["prol"] = $data["rol"];
     $_SESSION["codigo"] = $data["codigo_proyecto"];
    echo "1";
  } else {
    echo "error";
  }
} 

?>
