<?php
	$page_title = "Show Bank Information";
	include('includes/accountingheader.html');


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
	echo "Connected successfully";
	

		
	// ECHO('$sql = "SELECT * from accounts",');
	$sql = "SELECT * from accounts";
			
	
$conn->close();


		include('includes/footer.html');
	?>
	<HTML>
	
			<h1>
				<a href="http://localhost:1234"</a>
			</h1>	
	</HTML>
<?