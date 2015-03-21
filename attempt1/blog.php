<?php
session_start();

?>








<!DOCTYPE html>

<html>

	<head>
		<title>Blog Attempt 1 with Dummy Data</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel ='stylesheet' href = "bootstrap/css/bootstrap.min.css">   <!-- Remember to add php -->
		<link rel = 'stylesheet' href = 'assets/css/main.css'>
	</head>



	<body>
	<h1> Welcome You have now logged in     <?php print_r($_SESSION['user_information']['name']); ?>  </h1>


	<a href = "blog_form/blog_inputs.php">Click here to create a blog post</a><br><br>
		<a href = "login/log_out.php">Logout</a>

		<div class = 'main_articles'>
			


			<article class = 'dummy1'>
				<p>Article 1</p>
			</article>

			<article class = 'dummy2'>
				<p>Article 1</p>
			</article>


			<article class = 'dummy3'>
				<p>Article 1</p>
			</article>


			<article class = 'dummy4'>
				<p>Article 1</p>
			</article>



		</div>


	


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>	
	<script type = "text/javascript" src="assets/javascript/ajax.js"></script>
				<!-- This will load at the bottom -->
	</body>

</html>


