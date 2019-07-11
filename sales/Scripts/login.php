<?php
require('../../Config.php');
$link = new mysqli($Host . ":" . $Port, $Username, $Password, $Database);

$username = $link->real_escape_string($_POST['username']);
$password = $link->real_escape_string($_POST['password']);
//$result = mysqli_query($link,"SELECT * FROM users WHERE username='$username' and password='$password' "); ;

/*if ($result==false)
{
    die(mysqli_error($link));
}*/
//echo $username;
//echo $password;
//session_start();
//echo 'logged in';
//$_SESSION["passed"] = "failed";

if($username == 'alissahaku' && $password == 'samsung@s8' || $username == 'hakeem2' && $password == 'samsung_s8') {
   //echo 'logged in';
   $cookie_name = "passed";
   $cookie_value = "ok";
   setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

   //$_SESSION["passed"] = "ok";

   header("Location: ../index.php");
}
else {
	header("Location: ../login.html");

}



?>
