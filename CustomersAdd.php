<head>
<link rel="stylesheet" href="style.css"/>
</head>
<?php
$page_title = 'Workorders: Customers: Add';
?>

<p>	<strong>Workorders: > Customers Database.</strong></p>

	<form name="customerservice" action="frm_entercustomer.php" method="POST">
		<P><Label>Date: <input type="date" name="today" id="date" value= "<?php echo date('Y-m-d'-1);?>"/>

	<fieldset><legend>Add Customer: </legend>

<p>
  <label>Cell: <input type="phone" name = "cphone"/></label>
  <label>Home: <input type="phone" name = "hphone"/></label>
  <label>Work: <input type="phone" name = "wphone"/></label>
</p>

<p>
	<label>F Name: <input type="text" name = "fname" />	</label>
		</ $name = fname+' '+lname />
	<label>L Name: <input type="text" name = "lname" />	</label>
		</ $name = fname+' '+lname />
	<label>Name: <input type="text" name = "$name" /> </label>
</p>

</p>
	<label>Address 1: <input type="text" name = "street1" /> </label>
	<label>Address 2: <input type="text" name = "street2" /> </label>
<p>
<p>
	<label>City: <input type="text" name = "city" /> </label>
	<label>State: <input type="text" name = "state" />	</label>
	<label>Zip: <input type="text" name = "zip" />	</label>
</p>
<p>
	<label>email: <input type="email" name = "email" />	</label>
	<label>Job Referral: <input type="text" name = "referral" />	</label>
</p>

<p>
	<label>Cust Notes: <input type="text" name = "discount" />	</label>
	<label>Bills to: <input type="text" name = "billsto" />	</label>
</p>
<p>
	<label>Company: <input type="text" name = "company" />	</label>
	<label>Contact: <input type="text" name = "contact" /> </label>
</p>
<p>
	<label>Billing Address: <input type="text" name = "bstreet1" /> </label>
	<label>Billing Address 1: <input type="text" name = "bstreet2" /> </label>

</p>

<p>
	<label>Billing City: <input type="text" name = "bcity" /> </label>
	<label>Billing State: <input type="text" name = "bstate" />	</label>
	<label>Billing Zip: <input type="text" name = "bzip" />	</label>
</p>
<p>
	<label>Tags: <input type="text" name = "tags" />	</label>
</p>
<p>
	<label>Discount <input type="text" name = "custnotes" />	</label>
	<label>Terms: <input type="text" name = "terms" />	</label>
</p>

<p align="right">

	<input type="submit" name="cancel" value="Cancel"/>
	<input type="submit" name="Save" value="Save"/>
</p>

<?php


include('includes/footer.html');

?>
