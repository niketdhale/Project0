<?php
	session_start();
	if($_SESSION['place']<=8)
	{
		header('location:home.html');
	}	
	?>
		<html>
			<head>
			<title>Home Page</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			  <style type="text/css">
			  	body{
			  			background-image: url("images/12.jpeg");
			  			background-size: cover;
			  	}
			  </style>
			</head>
			<body>
				<div style="margin-top: 15%">
				<center >
					<h1 class="text-danger bg-danger"><img src="images/icons8-delete-50.png">NO SPACE AVAILABLE</h1>
					<h2>Try Again After Some Time</h2>
					<button class="btn btn-info btn-lg"><a href="index.html">Home</a></button>
				</center>
			</div>
			</body>
		</html>
	