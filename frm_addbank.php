<?php
	$page_title = "Enter Bank Information";
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
	
	
// Check required fields


$date = "echo date('Y-m-d')";

$bank_name = $_POST['bank_name'];
$routing_no = $_POST['routing_no'];
$bank_type = $_POST['bank_type'];
$acct_name = $_POST['acct_name'];
$acct_no = $_POST['acct_no'];
$acct_type = $_POST['acct_type'];
$notes = $_POST['notes'];


    $errormsg = "no errors";
		if (!empty($_REQUEST['bank_name'])){	$bank_name = $_REQUEST['bank_name'];	}else{ $bank_name = NULL;}
		if (!empty($_REQUEST['routing_no'])){	$routing_no = $_REQUEST['routing_no'];	}else{ $routing_no = NULL;}
		if (!empty($_REQUEST['bank_type'])){	$bank_type = $_REQUEST['bank_type'];	}else{ $bank_type = NULL;}
		if (!empty($_REQUEST['acct_name'])){	$acct_name = $_REQUEST['acct_name'];	}else{ $acct_name = NULL;}
		if (!empty($_REQUEST['acct_no'])){		$acct_no = $_REQUEST['acct_no'];		}else{ $acct_no = NULL;}
        if (!empty($_REQUEST['acct_type'])){	$acct_type = $_REQUEST['acct_type'];	}else{ $acct_type = NULL;}
		if (!empty($_REQUEST['notes'])){		$notes = $_REQUEST['notes'];			}else{ $notes = NULL;}

		
		
		// DISPLAY ERRORS
		if ($errormsg = 'no errors'){   } else {echo $errormsg; echo ' <a href="/accounting.php">Click Here to continue</a>';}
		
		// ENTER INTO ACCOUNT DATABASE
		
		$sql = "INSERT INTO skilledtech.accounts (bank_name,routing_no,bank_type,acct_name,acct_no,acct_type,notes)
		VALUES ('$bank_name','$routing_no','$bank_type','$acct_name','$acct_no','$acct_type','$notes')";
		
//		$custid	 = select 'accounts.AcctID';
			
		if ($conn->query($sql) === TRUE)  {
			echo "Thank you! Your Customer info has been entered into our database, you may close this window!";
		}   else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

	
$conn->close();


		include('includes/footer.html');
	?>
	<HTML>
	
			<h1>
				<a href="http://localhost:1234"</a>
			</h1>	
	</HTML>
<?