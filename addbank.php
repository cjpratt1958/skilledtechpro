<?php
$page_title = 'SkilledTechPro: Accounting: AddBank';

// workorder menu bar on left side and title
// include('includes/accountingheader.html');
//date = date('y-m-d');

?>

<p>	<strong>Accounting: > Add a New Bank Acct</strong></p>




	<form name="addbank" action="frm_addbank.php" method="POST">
		<P><Label>Date: <input type="date" name="today" id="date" value= "<?php echo date('Y-m-d');?>"/>

	<fieldset><legend>Enter Bank Information: </legend>

		<p><label>Bank Name: <input type="text" name = "bank_name" placeholder="Bank Name" />
		</label></p>

		<p><label>Routing Number: <input type="text" name = "routing_no" placeholder="Bank Routing Number"/>
		</label></p>
	
		<p><label>Bank Type: <input type="text" name = "bank_type" placeholder="Bank, Credit Card, etc..."/>
		</label></p>

		<p><label>Nick Name: <input type="text" name = "acct_name"placeholder="General, Payroll etc..." />
		</label></p>
		
		<p><label>Account Number: <input type="text" name = "acct_no" placeholder="Account Number"/>
		</label></p>

		<p><label>Account Type: <input type="text" name = "acct_type"placeholder="Checking, Savings etc..." />
		</label></p>

		<p></label> <label> Bank Notes: <input type="text" name = "notes" placeholder="Notes"/>
		</label></p>

	</fieldset>



	<p align="right">
		<input type="submit" name="clear" value="Clear Form"/>
		
		<input type="submit" name="cancel" value="Cancel"/>
		
		<input type="submit" name="done" value="Done"/>
	</p>

<?php

include('includes/footer.html');

?>
