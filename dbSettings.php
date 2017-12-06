<?php 
	$conn= mysql_connect("localhost","root","","toffydangz");
	$sqlquery=mysql_query($conn);
	if (mysql_connect_errno()) {
		echo "Connection failed: ". mysqli_connect_errno();
	exit();
	}
	
 ?>