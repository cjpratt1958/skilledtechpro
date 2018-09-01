<?php 
	$page_title = "Enter Customer Information";
	include('includes/workorderheader.html');

?>

	<?php 
	    $errormsg = "no errors";
	    if (!empty($_REQUEST['cphone'])){	$cphone = $_REQUEST['cphone'];}else{ $cphone = NULL; $errormsg = "Please enter cell phone";}	
		if (!empty($_REQUEST['hphone'])){	$hphone = $_REQUEST['hphone'];}else{ $hphone = NULL; $errormsg = "Please enter home phone";}	
		if (!empty($_REQUEST['company'])){$company = $_REQUEST['company'];}else{ $company = NULL;}	
		if (!empty($_REQUEST['name'])){	$name = $_REQUEST['name'];}else{ $name = NULL;}	
		if (!empty($_REQUEST['address'])){	$address = $_REQUEST['address'];}else{ $address = NULL;}	
		if (!empty($_REQUEST['city'])){	$city = $_REQUEST['city'];}else{ $city = NULL;}	
		if (!empty($_REQUEST['state'])){	$state = $_REQUEST['state'];}else{ $state = NULL;}	
		if (!empty($_REQUEST['zip'])){	$zip = $_REQUEST['zip'];}else{ $zip = NULL;}	
		if (!empty($_REQUEST['email'])){	$email = $_REQUEST['email'];}else{ $email = NULL;}	
		
		if ($errormsg = 'no errors'){   } else {echo $errormsg; echo ' <a href="/customerservice.php">Click Here to continue</a>';}	
	?>

	<?php 
		include('includes/footer.html');
	?>