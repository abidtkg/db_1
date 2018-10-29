<?php
	if (isset($_POST['search'])) 
	{
	 	$valueToSearch = $_POST['valueToSearch'];

	 	$query = "SELECT * FROM `biodata` WHERE CONCAT(`ID`, `Name`, `Father_Name`, `Mother_Name`, `Present_Address`, `Permanent_Address`, `Phone_Number`, `Email`, `Class_Roll`, `Board_Roll`, `Reg_Number`, `Date_Of_Birth`, `Student_ID`, `Comment`) LIKE '%".$valueToSearch."%' ";

	 	$search_resualt = filterTable($query);
	 } 
	 else{
	 		$query = "SELECT * FROM 'biodata'";
	 		$search_resualt = filterTable($query);
	 		$search_resualt = mysqli_query($connect, $query); 		
	 }

	 

	 function filterTable($query)
	 {
	 	$connect = mysqli_connect('localhost', 'root', '', 'stinfo');
	 	$filter_Result = mysqli_query($connect, $query);
	 	return $filter_Result;
	 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Search Data</title>
	<link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">
	<link rel="stylesheet" href="../css/search.css" type="text/css">
	<style type="text/css">
		
	</style>
</head>
<body>
	<header id="header">
		<nav id="nav">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="../form.php">Sign Up</a></li>
				<li><a href="#">Search</a></li>
				<li><a href="datalist.php">data list</a></li>
			</ul>
		</nav>
	</header>
	<div id="search_body">
		<h1>Want Your Data?</h1>
		<div class="box">
			<form action="search.php" method="post">
				<input class="search_box" type="text" name="valueToSearch" placeholder="Type..." autocomplete="off">
				<input class="search_button" type="submit" name="search" value="Search">
				<a href="#">Advanced</a>
			</form>
		</div>
	</div>
	<div id="table_body">
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
		
		<?php while($row = mysqli_fetch_array($search_resualt)):?>
			<tr>	
			<td><?php echo $row ['ID']; ?></th>
			<td><?php echo $row ['Name']; ?></th>
			<td><?php echo $row ['Father_Name']; ?></th>
			<td><?php echo $row ['Mother_Name']; ?></th>
			<td><?php echo $row ['Present_Address']; ?></th>
			<td><?php echo $row ['Permanent_Address']; ?></th>
			<td><?php echo $row ['Phone_Number']; ?></th>
			<td><?php echo $row ['Email']; ?></th>
			<td><?php echo $row ['Class_Roll']; ?></th>
			<td><?php echo $row ['Board_Roll']; ?></th>
			<td><?php echo $row ['Reg_Number']; ?></th>
			<td><?php echo $row ['Date_Of_Birth']; ?></th>
			<td><?php echo $row ['Student_ID']; ?></th>
			<td><?php echo $row ['Comment']; ?></th>
			</tr>
		<?php endwhile; ?>

		</table>
	</div>
</body>
</html>