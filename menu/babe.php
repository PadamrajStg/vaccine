<?php
	include("../db/dbConnection.php");

	if(isset($_GET['action']) && $_GET['action']=='save'){

		$card_no=$_POST['card_no'];
		$ward_no=$_POST['ward_no'];
		$name=$_POST['name'];
		$gender=$_POST['gender'];
		$dob_np=$_POST['dob_np'];
		$dob_en=$_POST['dob_en'];
		$birth_place=$_POST['birth_place'];
		$contact_no=$_POST['contact_no'];
		$father_name=$_POST['father_name'];
		$vaccine_status=$_POST['vaccine_status'];
		$registered_by=$_POST['registered_by'];
		$created_at=$_POST['created_at'];
		$updated_at=$_POST['updated_at'];

}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vaccination Information System</title>
</head>
<body>
	<p style="font-size:14px; font-weight:bold">Enter Babe Information</p>
	<form method="post" action="index.php?action=save" >
	Card No       : <input type="text" name="card_no"><br>
	Ward No       : <input type="text" name="ward_no"><br>
	Name          : <input type="text" name="name"><br>
	
	Select Gender:
	male          : <input type="radio" name="gender" value="male" checked />
	female        : <input type="radio" name="gender" value="female" /><br><br>

	Dob Nepal     : <input type="text" name="dob_np"><br>
	Dob Eng       : <input type="text" name="dob_en"><br>
	Birth Place   : <input type="text" name="birth_place"><br>
	Contact No    : <input type="text" name="contact_no"><br>
    Father Name   : <input type="text" name="father_name"><br>
    
    Vaccine Status:
    Yes: <input type="radio" name="status" value="Yes" checked />
    No: <input type="radio" name="status" value="No" /><br><br>

    Registered By : <input type="text" name="registered_by"><br>
    Created At    : <input type="text" name="created_at"><br>
    Updated At    : <input type="text" name="updated_at"><br>
	<input type="submit" value="submit" name="submit">
	</form>
</body>
</html>