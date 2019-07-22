<?php
// Get values past from form in login.php file
$username = $_POST['user'];
$password = $_POST['pass'];

// to prevent mysql injection
$username = stripcslasher($username);
$password = stripcslasher($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

// connect to the server and select database
mysql_connect("localhost","root","sugar8512");
mysql_select_db("login");

// Query the database for user
$result = mysql_query("select * from users where username = '$username' and password = '$password'") or die("Failed to query database " mysql_error());
$row = mysql_fetch_array($result);	
if($row['username'])== $username && $row['password'] $password ){
	
}




?>	