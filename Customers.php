<?php 
$page_title = 'Workorders: Customers';
include('includes/workorderheader.html');
?>

<p>	<strong>Workorders: > Customers Database.</strong></p>

	<form name="customerservice" action="frm_entercustomer.php" method="POST">
		<P><Label>Date: <input type="date" name="today" id="date" value= "<?php echo date('Y-m-d');?>"/>

	<fieldset><legend>Add / Edit Customer: </legend>

	<p><label>Cellular: <input type="phone" name = "cphone" />
	</label><label>Home: <input type="phone" name = "hphone" />
	</label></p>
		<p><label>Work: <input type="phone" name = "wphone" />
	</label><label>Contact: <input type="text" name = "contact" />
	</label></p>

	<p><label>F Name: <input type="text" name = "fname" />
	</label><label>L Name: <input type="text" name = "lname" />
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
	</label><label>Job Referral: <input type="text" name = "referral" />
	</label></p>

	<p><label>Cust Notes: <input type="text" name = "discount" />
	</label><label>Bills to: <input type="text" name = "billsto" />
	</label></p>

	
	<p><label>Discount <input type="text" name = "custnotes" />
	</label><label>Terms: <input type="text" name = "terms" />
	</label></p>

	<p align="right">
		<input type="submit" name="search" value="Search"/>
		<input type="submit" name="browse" value="Browse"/>
		<input type="submit" name="top" value="|<"/>
		<input type="submit" name="prev" value="<"/>
		<input type="submit" name="next" value=">"/>		
		<input type="submit" name="bottom" value=">|"/>			
		<input type="submit" name="add" value="Add"/>
		<input type="submit" name="edit" value="Edit"/>
		<input type="submit" name="cancel" value="Cancel"/>
		<input type="submit" name="done" value="Done"/>
		
	</p>

<?php 


include('includes/footer.html');

?>