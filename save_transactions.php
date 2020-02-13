<?php
	$page_title = "Enter Transaction Information";
	include('includes/accountingheader.html');


// open connection to the database "skilledtech"

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "SkilledTechPro";


// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);


// Check connection
if (!$conn){
	die("Connection failed: " .mysqli_connect_error());
	}
//	echo "Connected successfully";


// Check required fields


$TransID = $_POST['TransID'];
$Catid = $_POST['Catid'];
$AccountNo = $_POST['AccountNo'];
$TransactionID = $_POST['TransactionID'];
$PostingDate = $_POST['PostingDate'];
$EffectiveDate = $_POST['EffectiveDate'];
$TransactionType = $_POST['TransactionType'];
$Vendor = $_POST['Vendor'];
$Amount = $_POST['Amount'];
$CheckNumber = $_POST['CheckNumber'];
$ReferenceNumber = $_POST['ReferenceNumber'];
$Description = $_POST['Description'];
$TransactionCategory = $_POST['TransactionCategory'];
$Type = $_POST['Type'];
$Memo = $_POST['Memo'];
$Notes = $_POST['Notes'];
$Cleared = $_POST['Cleared'];


    $errormsg = "no errors";
		if (!empty($_REQUEST['TransID'])){	$TransID = $_REQUEST['TransID'];}else{ $TransID = NULL;}
		if (!empty($_REQUEST['Catid'])){	$Catid = $_REQUEST['Catid'];}else{ $Catid = NULL;}
		if (!empty($_REQUEST['AccountNo'])){	$AccountNo = $_REQUEST['AccountNo'];}else{ $AccountNo = NULL;}
		if (!empty($_REQUEST['TransactionID'])){	$TransactionID = $_REQUEST['TransactionID'];}else{ $TransactionID = NULL;}
		if (!empty($_REQUEST['PostingDate'])){	$PostingDate = $_REQUEST['PostingDate'];}else{ $PostingDate = NULL;}
		if (!empty($_REQUEST['EffectiveDate'])){$EffectiveDate = $_REQUEST['EffectiveDate'];}else{ $EffectiveDate = NULL;}
    if (!empty($_REQUEST['TransactionType'])){	$TransactionType = $_REQUEST['TransactionType'];}else{ $TransactionType = NULL; $errormsg = "Please enter cell phone";}
		if (!empty($_REQUEST['Vendor'])){	$Vendor = $_REQUEST['Vendor'];}else{ $Vendor = NULL; $errormsg = "Please enter home phone";}
		if (!empty($_REQUEST['Amount'])){	$Amount = $_REQUEST['Amount'];}else{ $Amount = NULL; $errormsg = "Please enter work phone";}
		if (!empty($_REQUEST['CheckNumber'])){	$CheckNumber = $_REQUEST['CheckNumber'];}else{ $CheckNumber = NULL;}
		if (!empty($_REQUEST['ReferenceNumber'])){	$ReferenceNumber = $_REQUEST['ReferenceNumber'];}else{ $ReferenceNumber = NULL;}
		if (!empty($_REQUEST['Description'])){	$Description = $_REQUEST['Description'];}else{ $Description = NULL;}
		if (!empty($_REQUEST['TransactionCategory'])){	$TransactionCategory = $_REQUEST['TransactionCategory'];}else{ $TransactionCategory = NULL;}
		if (!empty($_REQUEST['Type'])){	$Type = $_REQUEST['Type'];}else{ $Type = NULL;}
		if (!empty($_REQUEST['Memo'])){	$Memo = $_REQUEST['Memo'];}else{ $Memo = NULL;}
		if (!empty($_REQUEST['Notes'])){	$Notes = $_REQUEST['Notes'];}else{ $Notes = NULL;}
		if (!empty($_REQUEST['Cleared'])){	$Cleared = $_REQUEST['Cleared'];}else{ $Cleared = NULL;}

		// DISPLAY ERRORS
		if ($errormsg = 'no errors'){   } else {echo $errormsg; echo ' <a href="/frm_bankTransactions.php">Click Here to continue</a>';}

		// ENTER INTO CUSTOMERS DATABASE
		// $date = now();


		$sql_trans = "INSERT INTO SkilledTechPro.transactions (TransID,Catid,AccountNo,TransactionID,PostingDate,EffectiveDate,TransactionType,Vendor,Amount,CheckNumber,ReferenceNumber,Description,TransactionCategory,Type,Memo,Notes)
		VALUES ('$TransID','$Catid','$AccountNo','$TransactionID','$PostingDate','$EffectiveDate','$TransactionType','$Vendor','$Amount','$CheckNumber','$ReferenceNumber','$Description','$TransactionCategory','$Type','$Memo','$Notes')";

//		$custid	 = select 'customers.Cust_ID';

		if ($conn->query($sql_trans) === TRUE)  {
			echo " Thank you! Your Transaction info has been entered into our database, you may close this window!";
		}   else{
			echo "Error: " . $sql_trans . "<br>" . $conn->error;
		}



$conn->close();


		include('includes/footer.html');
	?>
	<HTML>

			<h1>
				<a href="http://localhost"</a>
			</h1>
