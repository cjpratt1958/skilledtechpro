<?php
// open connection to the database "skilledtech"

$servername = "127.0.0.1";
$username = "root";
$password = "sugar8512";
$dbname = "skilledtech";



// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);


// Check connection
if (!$conn){
	die("Connection failed: " .mysqli_connect_error());
	}
	echo "Connected successfully  ";
	

	$custid = ' SELECT Cust_ID from customers ';
	
	
	echo '$custid';

	
select * from customers;
	
	
	
	
	?>
	