<?php
session_start();
if(isset($_POST["login"])){
	include_once "db.php";
	$email = mysqli_real_escape_string($conn, $_POST["email"]);
	$password = mysqli_real_escape_string($conn, $_POST["password"]);

	// error handeller
	if(empty($email) || empty($password)){
		header("Location: ../index.php?Sorry");
		exit();
	}else{
		// $sql = "SELECT * FROM user WHERE email='$email' OR username='$email'";
		$sql = "SELECT * FROM user WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		$rowCheck = mysqli_num_rows($result);
		if($rowCheck < 1){
			header("Location: ../index.php?dbError");
			exit();
		}else{
			if ($row = mysqli_fetch_assoc($result)) {
				$checkPwd = password_verify($password, $row['password']);
				if ($checkPwd == false) {
					header("Location: ../index.php?pass");
					exit();
				}else if($checkPwd == true){
					$_SESSION['id'] = $row['id'];
					$_SESSION['name'] = $row['name'];
					$_SESSION['admin'] = $row['admin'];
					header("Location: ../index.php");
					exit();
				}
			}
		}
	}
}
?>