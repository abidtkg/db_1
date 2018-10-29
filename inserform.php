
<!DOCTYPE html>
<html>
<head>
	<title>Inserted Compleate</title>
	<link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">
	<link rel="stylesheet" href="css/form.css" type="text/css">
</head>
<body>
	<header id="header">
		<nav id="nav">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="form.php">Sign Up</a></li>
				<li><a href="public/search.php">Search</a></li>
				<li><a href="public/datalist.php">Data List</a></li>
			</ul>
		</nav>
	</header>
	<div id="formBody">
		<div id="phpscript">
		<?php
	$con = mysqli_connect('localhost','root','');
	if (!$con) {
		echo 'Database is not connected';
		 #database conncetion error message
	}

	if (!mysqli_select_db($con,'stinfo')) {
		echo 'Database is not found or there is some error';
		//database finding error message
	}

	$Name = $_POST['Name'];
	$Father_Name = $_POST['Father_Name'];
	$Mother_Name = $_POST['Mother_Name'];
	$Present_Address = $_POST['Present_Address'];
	$Permanent_Address =  $_POST['Permanent_Address'];
	$Phone_Number = $_POST['Phone_Number'];
	$Email = $_POST['Email'];
	$Class_Roll = $_POST['Class_Roll'];
	$Board_Roll = $_POST['Board_Roll'];
	$Reg_Number = $_POST['Reg_Number'];
	$Date_Of_Birth = $_POST['Date_Of_Birth'];
	$Student_ID = $_POST['Student_ID'];
	$Comment = $_POST['Comment'];


	$sql = "INSERT INTO biodata (Name,Father_Name,Mother_Name,Present_Address,Permanent_Address,Phone_Number,Email,Class_Roll,Board_Roll,Reg_Number,Date_Of_Birth,Student_ID,Comment) 

	VALUES ('$Name', '$Father_Name', '$Mother_Name', '$Present_Address', '$Permanent_Address', '$Phone_Number', '$Email', '$Class_Roll', '$Board_Roll', '$Reg_Number', '$Date_Of_Birth', '$Student_ID', '$Comment' )";



	if (!mysqli_query($con,$sql)) {
		echo 'ther is some error in sql';
		//mysql user data input error message
	}
	else{
		echo "<p style='color:white; text-align:center; padding:100px; font-size:25pt; font-family: Kodchasan; '>Thank you for submit your information :)</p>";
		//user input data success message print version
	}	
	?>
		</div>
	</div>
</body>
</html>