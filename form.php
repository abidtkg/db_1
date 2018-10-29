<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
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

		<div id="fleft">
		<form id="formLeft">
			<p class="input_text_box">Student Name</p> 
			<p class="input_text_box">Fathers name</p> 
			<p class="input_text_box">Mothers Name</p> 
			<p class="input_text_box">Present Address</p> 
			<p class="input_text_box">Permanent Address</p> 
			<p class="input_text_box">Phone Number</p> 
			<p class="input_text_box">Email Address</p> 
			<p class="input_text_box">Class Roll</p> 
			<p class="input_text_box">Board Roll</p> 
			<p class="input_text_box">Reg No.</p> 
			<p class="input_text_box">Date of Birth</p> 
			<p class="input_text_box">Student ID</p> 
			<p class="input_text_box">Comment</p>
		</form>
		</div>


		<div id="fRight">
		<form id="formRight" method="post" action="inserform.php">
			<input autocomplete="off" class="input_box" type="text" name="Name" placeholder="Name" > <br>
			<input autocomplete="off" class="input_box" type="text" name="Father_Name" placeholder="Fathers Name" > <br>
			<input autocomplete="off" class="input_box" type="text" name="Mother_Name" placeholder="Mothers Name" > <br>
			<input autocomplete="off" class="input_box" type="text" name="Present_Address" placeholder="Present Address" > <br>
			<input autocomplete="off" class="input_box" type="text" name="Permanent_Address" placeholder="Permanent Address" > <br>
			<input autocomplete="off" class="input_box" type="text" name="Phone_Number" placeholder="Phone Number" > <br>
			<input autocomplete="off" class="input_box" type="text" name="Email" placeholder="Email Address" > <br>
			<input autocomplete="off" class="input_box" type="text" name="Class_Roll" placeholder="Class Roll" > <br>
			<input autocomplete="off" class="input_box" type="text" name="Board_Roll" placeholder="Board Roll" > <br>
			<input autocomplete="off" class="input_box" type="text" name="Reg_Number" placeholder="Registration Number" > <br>
			<input autocomplete="off" class="input_box" type="text" name="Date_Of_Birth" placeholder="Year-Month-Date(keep hifen)" > <br>
			<input autocomplete="off" class="input_box" type="text" name="Student_ID" placeholder="Student ID" > <br>
			<input autocomplete="off" class="input_box" type="text" name="Comment" placeholder="Comment" > <br>
			<input autocomplete="off" class="submit" type="submit" name="submit" value="Submit Now">

		</form>
		</div>
	</div>
	<div id="formBody_right">
		<p style='color:white; text-align:center; font-size:25pt; font-family: Kodchasan; '>Please Read the roules</p>
	</div>

</body>
</html>