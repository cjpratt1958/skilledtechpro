<?php
	$page_title = "Enter Customer Information";
	include('includes/hrheader.html');


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

// **** TEST
// <P><Label>Date: <input type="date" name="today" id="date" value="<?php echo date('Y-m-d');"/>;
// **** END TEST

$date = "echo date('Y-m-d')";
// $date = now();

// **** TEST
// $date = "Auto CURDATE()', CURDATE()”;
// **** END TEST

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$name = $_POST['name'];
$company = $_POST['company'];
$contact = $_POST['name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$cphone = $_POST['cphone'];
$hphone = $_POST['hphone'];
$wphone = $_POST['hphone'];
$email = $_POST['email'];
$terms = $_POST['terms'];
$billsto = "";
$jobnotes = $_POST['jobnotes'];
$custnotes = $_POST['custnotes'];
$technician = $_POST['technician'];
$Sold_Date = $date;



$Incident = $date;



    $errormsg = "no errors";
		if (!empty($_REQUEST['today'])){	$date = $_REQUEST['today'];}else{ $date = NULL;}
		if (!empty($_REQUEST['fname'])){	$fname = $_REQUEST['fname'];}else{ $fname = NULL;}
		if (!empty($_REQUEST['lname'])){	$lname = $_REQUEST['lname'];}else{ $lname = NULL;}
		if (!empty($_REQUEST['contact'])){	$contact = $_REQUEST['contact'];}else{ $contact = NULL;}
		if (!empty($_REQUEST['name'])){	$name = $_REQUEST['name'];}else{ $name = NULL;}
		if (!empty($_REQUEST['company'])){$company = $_REQUEST['company'];}else{ $company = NULL;}
        if (!empty($_REQUEST['cphone'])){	$cphone = $_REQUEST['cphone'];}else{ $cphone = NULL; $errormsg = "Please enter cell phone";}
		if (!empty($_REQUEST['hphone'])){	$hphone = $_REQUEST['hphone'];}else{ $hphone = NULL; $errormsg = "Please enter home phone";}
		if (!empty($_REQUEST['wphone'])){	$wphone = $_REQUEST['wphone'];}else{ $wphone = NULL; $errormsg = "Please enter work phone";}
		if (!empty($_REQUEST['address'])){	$address = $_REQUEST['address'];}else{ $address = NULL;}
		if (!empty($_REQUEST['city'])){	$city = $_REQUEST['city'];}else{ $city = NULL;}
		if (!empty($_REQUEST['state'])){	$state = $_REQUEST['state'];}else{ $state = NULL;}
		if (!empty($_REQUEST['zip'])){	$zip = $_REQUEST['zip'];}else{ $zip = NULL;}
		if (!empty($_REQUEST['email'])){	$email = $_REQUEST['email'];}else{ $email = NULL;}
		if (!empty($_REQUEST['terms'])){	$terms = $_REQUEST['terms'];}else{ $terms = NULL;}
		if (!empty($_REQUEST['billsto'])){	$billsto = $_REQUEST['billsto'];}else{ $billsto = NULL;}
		if (!empty($_REQUEST['schednotes'])){	$schednotes = $_REQUEST['schednotes'];}else{ $schednotes = NULL;}
		
		if (!empty($_REQUEST['Emp_ID'])){	$Emp_ID = $_REQUEST['Emp_ID'];}else{ $Emp_ID = NULL;}
		if (!empty($_REQUEST['Incident'])){	$Incident = $_REQUEST['Incident'];}else{ $Incident = NULL;}
		if (!empty($_REQUEST['trade'])){	$trade = $_REQUEST['trade'];}else{ $trade = NULL;}
		if (!empty($_REQUEST['priority'])){	$priority = $_REQUEST['priority'];}else{ $priority = NULL;}
		if (!empty($_REQUEST['Schedule_Date'])){	$Schedule_Date = $_REQUEST['Schedule_Date'];}else{ $Schedule_Date = NULL;}
		
		
		$jobnotes = $jobnotes." Job sold by ?? on ".$date;
		$custnotes = $custnotes." Customer created by ?? on ".$date;
		
		
		// DISPLAY ERRORS
		if ($errormsg = 'no errors'){   } else {echo $errormsg; echo ' <a href="/customerservice.php">Click Here to continue</a>';}
		
		// ENTER INTO CUSTOMERS DATABASE
		// $date = now();
		
		$sql_cust = "INSERT INTO customers (fname,lname,name,company,contact,address,city,state,zip,cphone,hphone,wphone,email,terms,billsto,notes,date)
		VALUES ('$fname','$lname','$name','$company','$contact','$address','$city','$state','$zip','$cphone','$hphone','$wphone','$email','$terms','$billsto','$notes','$date')";
		
		$custid	 = select 'customers.Cust_ID';
			
//		//if ($conn->query($sql_cust) === TRUE)  {
//		//	echo "Thank you! Your Customer info has been entered into our database, you may close this window!";
//} else//{
///echo "//Error: " . $sql . "<br>" . $conn->error;
//	//}
		$sql_job = "INSERT INTO jobs (Cust_ID,Sold_Date,Emp_ID,Schedule_Date,Incident,priority,trade,terms,schednotes)
		VALUES ('$custid','$Sold_Date','$Emp_ID','$Schedule_Date','$Incident','$priority','$trade','$terms','$schednotes')";

	
	
//	if  ($conn->query($sql_job) === TRUE){
//			echo "Thank you! Your job info has been entered into our database, you may close this window!";
//		}else{
//			
//		}
	
	
$conn->close();

		include('includes/footer.html');
	?>