<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
	
require('db_config.php');

extract($_POST);

$date = date("Y-m-d h:i:sa");


$mysqli->query("INSERT INTO subscribers VALUES ('', '$email', '$date')");

if($mysqli->affected_rows>0){
	
header("location:index.php");

}
else{
	
	echo "<h2>Data submit not successfull</h2>";
}

}

?>