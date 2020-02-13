<?php
	$page_title = "Enter Customer Information";
	include('includes/workorderheader.html');


// open connection to the database "skilledtech"

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "skilledtechpro";


// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);


// Check connection
if (!$conn){
	die("Connection failed: " .mysqli_connect_error());
	}
	echo "Connected successfully";

	?>
