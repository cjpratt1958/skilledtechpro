<?php
$page_title = 'STP Workorders: New Job';

// workorder menu bar on left side and title
// include('includes/workorderheader.html');
//date = date('y-m-d');
<title><?php echo $page_title; ?></title>
?>


<head>
<title> Add a new Job </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<p>	<strong>Workorders: > Add a New Job</strong></p>




	<form name="customerservice" action="frm_entercustomer.php" method="POST">

	<!-- <P><Label>Date: <input type="date" name="today" id="date" value= "<?php echo date('Y-m-d');?>"/> -->

	<fieldset><legend>Enter Customer Information: </legend>

	<p><label>Cellular: <input type="phone" name = "cphone" />
	</label><label>Home: <input type="text" name = "hphone" />
	</label></p>

	<p><label>First Name: <input type="text" name = "fname" />
	</label><label>Last Name: <input type="text" name = "lname" />
	</label></p>

	</ $name = $fname+' '+lname />

		<p><label>Company: <input type="text" name = "company" />
	</label>
		<label>Name: <input type="text" name = "name" />
	</label></p>

	<p><label>Address: <input type="text" name = "address" />


	</label><label>City: <input type="text" name = "city" />
	</label></p>

	<p><label>State: <input type="text" name = "state" />
	</label><label>Zip: <input type="text" name = "zip" />
	</label></p>

	<p><label>email: <input type="email" name = "email" />
	</label><lable>Job Referral: <input type="text" name = "referral" />
	</label></p>

	<p><label>Customer Notes: <input type="text" name = "custnotes" />





	</fieldset>
		<fieldset><legend>Enter Job Information: </legend>
		<p><label>Job Description: <input type="text" name = "jobdesc" />
	</label>
		<fieldset><legend>Priority, Trade, Terms: </legend>

	<p align="right"> <p><label for="priority"><STRONG>PRIORITY: </STRONG></label> <br>
	<input type="radio" name="priority" value="00 Emerg">Emergency
	<input type="radio" name="priority" checked = "checked" value="01 Job">Go For It
	<input type="radio" name="priority" value="02 Est">Estimate
	<input type="radio" name="priority" value="03 Cncl">Cancel
	<input type="radio" name="priority" value="04 Rwk">Rework
	<input type="radio" name="priority" value="05 Self">Self Generated
	<input type="radio" name="priority" value="06 Oth">Other


	</p>


	<p align="right"> <p><label for="trade"><STRONG>TRADE: </STRONG></label> <br>
	<input type="radio" name="trade" checked = "checked" value="Elect">Electrical
	<input type="radio" name="trade" value="HVAC">HVAC
	<input type="radio" name="trade" value="Cameras	">Video Surviellance
	<input type="radio" name="trade" value="Energy">Energy Management
	<input type="radio" name="trade" value="Smart Homes">Smart Homes

	</p>


	<p align="right"> <p><label for="terms"><STRONG>TERMS: </STRONG></label> <br>
	<input type="radio" name="terms" value="Bill">Bill
	<input type="radio" name="terms" checked = "checked" value="C.O.D.">COD
	<input type="radio" name="terms" value="Estimate">Estimate
	<input type="radio" name="terms" value="Finance">Finance
	</p>


	</fieldset>
	<br>
	</label> <label> Job Notes: <input type="text" name = "jobnotes" />
	</label>



		</fieldset>


	</fieldset>
		<fieldset><legend>Enter Schedule Information: </legend>


	<p><label>Scheduled Date:<input type="date" id="schedule_date" value="<?php echo date('Y-m-d');?>"/>
		<label>Time: <input type="text" name = "schedule_time" />
	</label>

<p><label>Schedule Notes: <input type="text" name = "schednotes" /><label>Tech: <input type="text" name = "technician" />

	</label>


		</fieldset>




	<p align="right">
		<input type="submit" name="clear" value="Clear Form"/>
		<input type="submit" name="cancel" value="Cancel"/>
		<input type="submit" name="done" value="Done"/>



	</p>

<?php

include('includes/footer.html');

?>
