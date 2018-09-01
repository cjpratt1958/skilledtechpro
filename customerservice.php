<?php
$page_title = 'TIM: Workorders: New Job';

// workorder menu bar on left side and title
include('includes/workorderheader.html');


?>

<p>	<strong>Workorders: > Add a New Job</strong></p>

// create form for entering new job

	<form action="frm_entercustomer.php" method="post">

	<fieldset><legend>Enter Customer Information: </legend>

	<p><label>Cellular: <input type="text" name = "cphone" />
	</label><label>Home: <input type="text" name = "hphone" />
	</label></p>

	<p><label>F Name: <input type="text" name = "fname" />
	</label><label>L Name: <input type="text" name = "lname" />
	</label></p>

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

	<p><label>email: <input type="text" name = "email" />
	<label><lable>job Referral: <input type="text" name = "referral" />
	</label></p>

		<p><label>Customer Notes: <input type="text" name = "custnotes" />

	</label></p>





	</fieldset>
		<fieldset><legend>Enter Job Information: </legend>
		<fieldset><legend>Priority, Trade, Terms: </legend>

	<p align="right"> <p><label for="priority">Priority: </label>
	<input type="radio" name="priority" value="00 Emerg">Emer
	<input type="radio" name="priority" value="01 Job">GFI
	<input type="radio" name="priority" value="02 Est">Est
	<input type="radio" name="priority" value="03 Cncl">Cancel
	<input type="radio" name="priority" value="04 Rwk">Rework
	<input type="radio" name="priority" value="05 Self">SelfGen
	<input type="radio" name="priority" value="06 Oth">Other


	</p>


	<p align="right"> <p><label for="trade">Trade: </label>
	<input type="radio" name="trade" value="Elect">Elect
	<input type="radio" name="trade" value="HVAC">HVAC
	<input type="radio" name="trade" value="Cameras	">Cameras
	<input type="radio" name="trade" value="Plumbing">Plumbing
	<input type="radio" name="trade" value="Energy">Energy
	</p>


	<p align="right"> <p><label for="terms">Terms: </label>
	<input type="radio" name="terms" value="Bill">Bill
	<input type="radio" name="terms" value="C.O.D.">COD
	<input type="radio" name="terms" value="Estimate">Estimate
	</p>


	</fieldset>
	<br>
	<p><label>  Job History: <input type="text" name = "f9notes" />
	</label> <label> Notes: <input type="text" name = "jnotes" />
	</label>
	<p><label>Job Description: <input type="text" name = "jobdesc" />
	</label>


		</fieldset>


	</fieldset>
		<fieldset><legend>Enter Schedule Information: </legend>
			<p><label>Scheduled Date: <input type="text" name = "schedule_date" </label><label>Time: <input type="text" name = "schedule_time" />
	</label>

<p><label>Schedule Notes: <input type="text" name = "Technician" /><label>Technician: <input type="text" name = "Technician" />
		
	</label>


		</fieldset>




	<p align="right">
		<input type="submit" name="clear" value="Clear Form"/>
		<input type="submit" name="cancel" value="Cancel"/>
		<input type="submit" name="done" value="Done"/>
	</p>

<?php

include('includes/footer.html');

// open connection to the database "skilledprotech"
require_once('../mysqli_connect.php');



