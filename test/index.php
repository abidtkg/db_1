<!DOCTYPE html>
<html>
<head>
	<title>Test Search box</title>
	<style type="text/css">
	body{
		padding: 0px;
		margin:0px;
	}
		#searchbox{
			background-color: green;
			height: 300px;
			width: 600px;
		}
		#searchbox_child{
			background-color: #aaa;
			height: 200px;
			width: 500px;
			margin-left: 50%;
			margin-top: 50%;
		}
		input[type="text"]{
			border-radius: 25px 10px 25px 10px;
			height: 50px;
			width: 350px;
			font-family: consolas;
			border-color: #aaa;
			transition: 0.5s;
		}
		input[type="text"]:hover{
			background-color: coral;
			transition: .5s;
			padding: 5px;
			font-size: 20pt;
			border-color: orange;
		}
		input[type="text"]:focus{
			box-shadow: 0 0 25px 0;
					}
	</style>
</head>
<body>
	<div id="searchbox">
		<div id="searchbox_child">
			<input type="text" name="search" placeholder="Type...">
			<input type="submit" name="submit" placeholder="Search">
		</div>
	</div>
</body>
</html>