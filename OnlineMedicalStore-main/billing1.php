<?php 
	
	if (isset($firstname) || isset($email) || isset($address) || isset($city)|| isset($state)|| isset($zip))
	{
		$firstname= $_POST['firstname'];
		$email= $_POST['email'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$zip=$_POST['zip'];
		$sql = "INSERT INTO billing(firstname,email,address,city,state,zip) VALUES('$firstname','$email',$city, '$state','$zip')";
		mysqli_query($conn, $sql);
		header("Location: ../viewbookings.php?result=success");


	}

?>

    