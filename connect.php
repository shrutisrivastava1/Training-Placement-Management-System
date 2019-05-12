<?php
	$hostname="localhost";
	$user_name="root";
	$pass_word="";
	$dbname="placement";
	$conn=mysqli_connect($hostname,$user_name,$pass_word,$dbname) or die("Could not connect to localhost,Error :".mysqli_connect_error());
	mysqli_set_charset($conn,"utf8");
	$dbname2="details";
	$con=mysqli_connect($hostname,$user_name,$pass_word,$dbname2) or die("Could not connect to localhost,Error :".mysqli_connect_error());
	mysqli_set_charset($con,"utf8");
	$dbname3="tandp";
	$co=mysqli_connect($hostname,$user_name,$pass_word,$dbname3) or die("Could not connect to localhost,Error :".mysqli_connect_error());
	mysqli_set_charset($con,"utf8");
?>