<?php
require('db_config.php');
extract($_POST);
$password = md5($password);

$admin_login_query = 
$mysqli->query("SELECT * FROM users WHERE user_email = '$email' AND user_password = '$password'");

if($admin_login_query->num_rows>0){
	
	session_start();
	$_SESSION['email'] = $email;
	header("Location: management/");
}

else{
	
	echo "<h4>Something wrong please try again, or contact with Admin</h4>";
	header("Location: login/");
	
}


?>