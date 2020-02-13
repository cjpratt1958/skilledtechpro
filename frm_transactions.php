<?php
	$page_title = 'SkilledTechPro: Accounting:Reconcile';

		// workorder menu bar on left side and title
		include('includes/accountingheader.html');
//date = date('y-m-d');


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

	<!-- <P><Label>Date: <input type="date" name="today" id="date" value= "
	<?php echo date('Y-m-d');?>"/> -->

	<fieldset><legend>Transaction Information: </legend>

	<p><label>TransID: <input type="text" name = "TransID" />
	</label><label>CatID: <input type="text" name = "CatID" />
	</label></p>

	<p><label>AccountNo: <input type="text" name = "AccountNO" />
	</label><label>TransactionID: <input type="text" name = "TranactionID" />
	</label></p>




	<p><label>TransactionType: <input type="text" name = "TransactionType" />






	</fieldset>
		<fieldset><legend>Enter Transaction Information: </legend>
	<br>
				</label><label>Vendor: <input type="text" name = "Vendor" />
				</label></p>

				<p><label>Amount: <input type="number" name = "Amount" />
				</label><label>CheckNumber: <input type="text" name = "CheckNumber" />
				</label></p>

				<p><label>ReferenceNumber: <input type="text" name = "ReferenceNumber" />
				</label><lable>Description: <input type="text" name = "Description" />
				</label></p>

				<p><label>TransactionCategory: <input type="text" name = "TransactionCategory" />

	<br>



		</fieldset>


	</fieldset>
		<fieldset><legend>Enter Schedule Information: </legend>

			<p><label>PostingDate: <input type="date" name = "PostingDate" />
		</label>
			<label>EffectiveDate: <input type="date" name = "EffectiveDate" />
		</label></p>

		</fieldset>




	<p align="right">

		<input type="submit" name="browse" value="Browse"/>
		<input type="submit" name="search" value="Search"/>
		<input type="submit" name="top" value="Top"/>
		<input type="submit" name="next" value="Next"/>
		<input type="submit" name="Prev" value="Prev"/>
		<input type="submit" name="bottom" value="Bottom"/>
		<input type="submit" name="add" value="Add"/>
		<input type="submit" name="edit" value="Edit"/>
		<input type="submit" name="cancel" value="Cancel"/>
		<input type="submit" name="done" value="Done"/>




	</p>

<?php

include('includes/footer.html');

?>
