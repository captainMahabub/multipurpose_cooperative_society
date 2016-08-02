<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
	
require('db_config.php');

extract($_POST);

$photo =$_FILES['photo']['tmp_name'];

$photoname =$_FILES['photo']['name'];
			
$path = "img/account_holder/";

$photopath = $path.$photoname;

move_uploaded_file($photo, $photopath);

$mysqli->query("INSERT INTO account_holders VALUES
('', '$name', '$fathersname', '$mothersname', '$birthdate', '$gender', '$mobile', '$email', '$nid', '$accountType', '$primaryDeposite', '$address', '$brunch','$verifier', '$nominee', 'photopath')");

if($mysqli->affected_rows>0){
	
header("location:index.php");

}
else{
	
	echo "<h2>Data submit not successfull</h2>";
}

}

?>