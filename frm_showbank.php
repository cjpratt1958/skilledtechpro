<?php
	$page_title = "Show Bank Information";
	include('includes/accountingheader.html');


// open connection to the database "skilledtech"

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "skilledtechpro";



// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);


// Check connection
if (!$conn){
	die("Connection failed: " .mysqli_connect_error());
	}

	// ECHO('$sql = "SELECT * from accounts",');
	$sql = "SELECT Description, Vendor, Amount from banktransactions where Vendor > '' ;";
  $result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	IF ($resultCheck > 0){
	   while ($row = mysqli_fetch_assoc($result)) {
			 	echo $row['Description'] . " ..... ";
    		echo $row['Vendor'] . " ..... $";
				echo $row['Amount'] . "<br>";

     }
  }


$conn->close();


		include('includes/footer.html');
	?>
	<HTML>

			<h1>
				<a href="http://localhost:1234"</a>
			</h1>
	</HTML>
