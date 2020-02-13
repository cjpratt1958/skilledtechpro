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
//	echo "Connected successfully";


// Check required fields

$Date = $_POST['Date'];
$cphone = $_POST['cphone'];
$hphone = $_POST['hphone'];
$wphone = $_POST['wphone'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$name = $_POST['name'];
$street1 = $_POST['street1'];
$street2 = $_POST['street2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$Notes = $_POST['Notes'];
$Billsto = $_POST['Billsto'];
$Company = $_POST['Company'];
$jobtitle = $_POST['jobtitle'];
$Contact = $_POST['Contact'];
$bstreet1 = $_POST['bstreet1'];
$bstreet2 = $_POST['bstreet2'];
$bcity = $_POST['bcity'];
$bstate = $_POST['bstate'];
$bzip = $_POST['bzip'];
$bnotes = ["bnotes"];
$email = $_POST['email'];
$Tags = $_POST['tags'];
$custnotes = $_POST['custnotes'];
$terms = $_POST['terms'];
$technician = $_POST['technician'];
$NO = $_POST['NO'];
$jobdesc = $_POST['jobdesc'];
$jobnotes = $_POST['jobnotes'];
$SoldDate = $_POST['SoldDate'];
$dispDate = $_POST['dispDate'];
$closedate = $_POST['closedate'];
$paiddate = $_POST['paiddate'];
$Incident = $_POST['incident'];



    $errormsg = "no errors";
		if (!empty($_REQUEST['today'])){	$date = $_REQUEST['today'];}else{ $date = NULL;}
		if (!empty($_REQUEST['cphone'])){	$cphone = $_REQUEST['cphone'];}else{ $cphone = NULL; $errormsg = "Please enter cell phone";}
		if (!empty($_REQUEST['hphone'])){	$hphone = $_REQUEST['hphone'];}else{ $hphone = NULL; $errormsg = "Please enter home phone";}
		if (!empty($_REQUEST['wphone'])){	$wphone = $_REQUEST['wphone'];}else{ $wphone = NULL; $errormsg = "Please enter work phone";}
		if (!empty($_REQUEST['fname'])){	$fname = $_REQUEST['fname'];}else{ $fname = NULL;}
		if (!empty($_REQUEST['lname'])){	$lname = $_REQUEST['lname'];}else{ $lname = NULL;}
		if (!empty($_REQUEST['name'])){	$name = $_REQUEST['name'];}else{ $name = NULL;}
		if (!empty($_REQUEST['street1'])){	$street1 = $_REQUEST['street1'];}else{ $street1 = NULL;}
		if (!empty($_REQUEST['street2'])){	$street2 = $_REQUEST['street2'];}else{ $street2 = NULL;}
		if (!empty($_REQUEST['city'])){	$city = $_REQUEST['city'];}else{ $city = NULL;}
		if (!empty($_REQUEST['state'])){	$state = $_REQUEST['state'];}else{ $state = NULL;}
		if (!empty($_REQUEST['zip'])){	$zip = $_REQUEST['zip'];}else{ $zip = NULL;}
		if (!empty($_REQUEST['Notes'])){	$Notes = $_REQUEST['Notes'];}else{ $Notes = NULL;}
		if (!empty($_REQUEST['billsto'])){	$billsto = $_REQUEST['billsto'];}else{ $billsto = NULL;}
		if (!empty($_REQUEST['company'])){$company = $_REQUEST['company'];}else{ $company = NULL;}
		if (!empty($_REQUEST['jobtitle'])){$jobtitle = $_REQUEST['jobtitle'];}else{ $jobtitle = NULL;}
		if (!empty($_REQUEST['contact'])){	$contact = $_REQUEST['contact'];}else{ $contact = NULL;}
		if (!empty($_REQUEST['bstreet1'])){	$bstreet1 = $_REQUEST['bstreet1'];}else{ $bstreet1 = NULL;}
		if (!empty($_REQUEST['bstreet2'])){	$bstreet2 = $_REQUEST['bstreet2'];}else{ $bstreet2 = NULL;}
		if (!empty($_REQUEST['bcity'])){	$bcity = $_REQUEST['bcity'];}else{ $bcity = NULL;}
		if (!empty($_REQUEST['bstate'])){	$bstate = $_REQUEST['bstate'];}else{ $bstate = NULL;}
		if (!empty($_REQUEST['bzip'])){	$bzip = $_REQUEST['bzip'];}else{ $bzip = NULL;}
		if (!empty($_REQUEST['bnotes'])){	$bnotes = $_REQUEST['bnotes'];}else{ $bnotes = NULL;}
		if (!empty($_REQUEST['email'])){	$email = $_REQUEST['email'];}else{ $email = NULL;}
		if (!empty($_REQUEST['tags'])){	$tags = $_REQUEST['tags'];}else{$tags = NULL;}
		if (!empty($_REQUEST['custnotes'])){	$custnotes = $_REQUEST['custnotes'];}else{ $custnotes = NULL;}
		if (!empty($_REQUEST['terms'])){	$terms = $_REQUEST['terms'];}else{ $terms = NULL;}
		if (!empty($_REQUEST['Technician'])){	$Technician = $_REQUEST['Technician'];}else{ $Technician = NULL;}
		if (!empty($_REQUEST['No'])){	$No = $_REQUEST['No'];}else{ $No = NULL;}
		if (!empty($_REQUEST['jobdesc'])){	$jobdesc = $_REQUEST['jobdesc'];}else{ $jobdesc = NULL;}
		if (!empty($_REQUEST['jobnotes'])){	$jobnotes = $_REQUEST['jobnotes'];}else{ $jobnotes = NULL;}
		if (!empty($_REQUEST['solddate'])){	$solddate = $_REQUEST['solddate'];}else{ $solddate = NULL;}
		if (!empty($_REQUEST['dispdate'])){	$dispdate = $_REQUEST['dispdate'];}else{ $dispdate = NULL;}
		if (!empty($_REQUEST['closedate'])){ $closedate = $_REQUEST['closedate'];}else{ $closedate = NULL;}
		if (!empty($_REQUEST['paiddate'])){	$paiddate = $_REQUEST['paiddate'];}else{ $paiddate = NULL;}
		if (!empty($_REQUEST['Incident'])){	$Incident = $_REQUEST['Incident'];}else{ $Incident = NULL;}


		$jobnotes = $jobnotes." Job sold by ?? on ".$date;
		$custnotes = $custnotes." Customer created by ?? on ".$date;


		// DISPLAY ERRORS
		if ($errormsg = 'no errors'){   } else {echo $errormsg; echo ' <a href="/customerservice.php">Click Here to continue</a>';}

		// ENTER INTO CUSTOMERS DATABASE
		// $date = now();

		$sql_cust = "INSERT INTO skilledtech.customers (Date,cphone,hphone,wphone,fname,lname,name,street1,street2,city,state,zip,Notes,Billsto,Company,Jobtitle,Contact,bstreet1,bstreet2,bcity,bstate,bzip,bnotes,Email,Tags,custnotes,terms,Technician,NO,jobdesc,jobnotes,solddate,dispdate,closedate,paiddate,incident)
		VALUES ('$Date','$cphone','$hphone','$wphone','$fname','$lname','$name','$street1','$street2','$city','$state','$zip','$Notes','$Billsto','$Company','$Jobtitle','$contact','$bstreet1','$bstreet2','$bcity','$bstate','$bzip','$bnotes','$Email','$Tags','$custnotes','$terms','$Technician','$NO','$jobdesc''$jobnotes','$solddate','$dispdate','closedate','paiddate','incident');

//		$custid	 = select 'customers.Cust_ID';

		if ($conn->query($sql_cust) === TRUE)  {
			echo " Thank you! Your Customer info has been entered into our database, you may close this window!";
		}   else{
			echo "Error: " . $sql_cust . "<br>" . $conn->error;
		}

		$sql_job = "INSERT INTO skilledtech.job (Emp_ID,Schedule_Date,Incident,priority,trade,terms,schednotes,jobdesc)
		VALUES ('$Emp_ID','$Schedule_Date','$Incident','$priority','$trade','$terms','$schednotes','$jobdesc')";



		if  ($conn->query($sql_job) === TRUE){
			echo " Thank you! Your job info has been entered into our database, you may close this window!";
		}	else{
			echo "Error: " . $sql_job . "<br>" . $conn->error;
		}


$conn->close();


		include('includes/footer.html');
	?>
	<HTML>

			<h1>
				<a href="http://localhost"</a>
			</h1>
