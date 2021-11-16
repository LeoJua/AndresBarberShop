<?php 
$conn = mysqli_connect("localhost:33065","root","","login");
 
if(!$conn){
	die("Connection error: " . mysqli_connect_error());	
}
?>