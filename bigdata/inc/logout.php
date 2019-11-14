<?php
	if (isset($_POST['logout'])) {
		# got logout command
		session_start();
		session_unset();
		session_destroy();
		header("Location: ../index.php");
		exit();
	}else if($_GET['logout']){
		session_start();
		session_unset();
		session_destroy();
		header("Location: ../index.php");
		exit();
	}else{
		header("Location: ../index.php");
		exit();
	}
?>