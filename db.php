<?php
$username = 'root';
$password = '';
$host = 'localhost';
$database = '';

if(mysqli_connect($host, $username,$password, $database)){
	if(mysqli_connect_errno()){
	echo 'sorry, er ging iets mis:'.mysqli_connect_error(); 
exit();
	}
}else{
	echo 'sorry, ik kon helaas geen verbinding maken met de databaseserver!';
exit();
}
?>
 
