<?php 
extract($_POST);

if (isset($signup)) {
	require 'dbSettings.php';

}

$insert= "INSERT INTO users (name, email, password,mobile,datetime) VALUES ('$name', '$email', '$password', '$mobile',now()) ";
$query= mysql_query($insert);
 ?>