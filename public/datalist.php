<!DOCTYPE html>
<html>
<head>
	<title>Search Data</title>
	<link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">
	<link rel="stylesheet" href="../css/datalist.css" type="text/css">

</head>
<body>
	<header id="header">
		<nav id="nav">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="../form.php">Sign Up</a></li>
				<li><a href="search.php">Search</a></li>
				<li><a href="datalist.php">data list</a></li>
			</ul>
		</nav>
	</header>
	<div id="print">
		
	</div>
	
	<table border="1px">
		<tr>
			<th>DataBase ID</th>
			<th>Student Name</th>
			<th>Father Name</th>
			<th>Mother Name</th>
			<th>Present Address</th>
			<th>Permanent Address</th>
			<th>Phone Number</th>
			<th>Email Address</th>
			<th>Class Roll</th>
			<th>Board Roll</th>
			<th>Reg No.</th>
			<th>Date of Birth</th>
			<th>Student ID</th>
			<th>Comment</th>
		</tr>
		<?php
		
			//making connection
			$conn = mysqli_connect("localhost", "root", "", "stinfo");
			if ($conn-> connect_error) {
				die("connection failed:". $conn-> conncet_error);
			}

			$sql = "SELECT ID, Name, Father_Name, Mother_Name, Present_Address, Permanent_Address, Phone_Number, Email, Class_Roll, Board_Roll, Reg_Number, Date_Of_Birth, Student_ID, Comment  from biodata";
			$result = $conn-> query($sql);

			if ($result-> num_rows > 0) {
				while ($row = $result-> fetch_assoc()) {
					
			
	echo "<tr>";
		echo "<td>". $row['ID']. "</td>";
		echo "<td>". $row['Name']. "</td>";
		echo "<td>". $row['Father_Name']. "</td>";
		echo "<td>". $row['Mother_Name']. "</td>";
		echo "<td>". $row['Present_Address']. "</td>";
		echo "<td>". $row['Permanent_Address']. "</td>";
		echo "<td>". $row['Phone_Number']. "</td>";
		echo "<td>". $row['Email']. "</td>";
		echo "<td>". $row['Class_Roll']. "</td>";
		echo "<td>". $row['Board_Roll']. "</td>";
		echo "<td>". $row['Reg_Number']. "</td>";
		echo "<td>". $row['Date_Of_Birth']. "</td>";
		echo "<td>". $row['Student_ID']. "</td>";
		echo "<td>". $row['Comment']. "</td>";
	echo "</tr>";
		}
			}
	?>
	</table>
</body>
</html>