<?php

$link = mysqli_connect("localhost", "root","","login");

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
$username = $mysqli->real_escape_string($_POST['username']);
$password = $mysqli->real_escape_string($_POST['password']);
$confirmpassword=$mysqli->real_escape_string($_POST["confirmpassword"]);
if( $password != $confirmpassword)
{
	header("Location: register.html");

}
$result = mysqli_query($link,"INSERT INTO users(username,password) VALUES ('$username', '$password')"); ;
  
session_start();
   $_SESSION["username"] = $username;
   header("Location: page.php");


}

?>