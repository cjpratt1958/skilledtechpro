<?php
	$page_title = 'SkilledTechPro: Accounting:Reconcile';

		// workorder menu bar on left side and title
		include('includes/accountingheader.html');
//date = date('y-m-d');


// open connection to the database "skilledtechPro"

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


// $TransID = $_POST['TransID'];
// $Catid = $_POST['Catid'];
// $AccountNo = $_POST['AccountNo'];
// $TransactionID = $_POST['TransactionID'];
// $PostingDate = $_POST['PostingDate'];

?>


<head>
<title> "Reconcile" </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<p>	<strong>Accounting:Reconcile</strong></p>




<form name="Reconcile" action="frm_reconcile.php" method="POST">




	<fieldset><legend>Enter Statement Information: </legend>

		<p><label>Statement End Date: <input type="date" name = "PostingDate" />
	  </label>
    </p>

	</fieldset>


	<fieldset><legend>Reconcile: </legend>

	SELECT PostingDate, Description, Vendor, Amount, reconciled
	FROM `banktransactions`
	WHERE PostingDate LIKE '2018-10-%' AND AccountNo = '4157'
	order by PostingDate;

	</fieldset>
	<p align="right">


		<input type="submit" name="Leave" value="Leave"/>
		<input type="submit" name="cancel" value="Cancel"/>
		<input type="submit" name="done" value="Done"/>

	</p>
</form>

<?php

include('includes/footer.html');

?>
