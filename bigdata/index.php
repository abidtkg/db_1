<?php
session_start();
if (isset($_SESSION['id'])){
	if($_SESSION['admin'] == true){
		header("Location: dashboard");
		exit();
	}else{
		echo ("<center><h1>You Are Not Admin!</h1>");
		echo ('<form action="inc/logout.php" method="post"><button name="logout">Logout</button></form></center>');
	}
}else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Analytical Server</title>
	<link rel="stylesheet" type="text/css" href="assets/libs/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body class="text-center">
	<form class="form-signin" method="post" action="inc/auth.php">
		<img class="mb-4" src="assets/img/statistics.svg" alt="" width="100" >
		<h1 class="h3 mb-3 font-weight-normal">Analytical Server</h1>
		<label for="inputEmail" class="sr-only">Email address</label>
		<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
		<div class="checkbox mb-3">
			<label>
				<input name="remember" type="checkbox" value="true"> Remember me
			</label>
		</div>
		<button name="login" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		<p class="mt-5 mb-3 text-muted">&copy; Abid Hasan 2019</p>
	</form>
	
	<!-- Bootstrap JavaScript -->
	<script src="assets/libs/bootstrap/jquery-3.3.1.slim.min.js"></script>
	<script src="assets/libs/bootstrap/popper.min.js"></script>
	<script src="assets/libs/bootstrap/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>