<!DOCTYPE html>
<html>

	<head>
		<title>Blog</title>
		<?php  include 'include/links.php'; ?>
		<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
	</head>


	<style>  /* Transfer all this */
		#indexBody{
			background:url(assets/css/images/beach.jpg);
			background-size: cover;
			background-repeat: no-repeat;	
		}

		.index_h1{
			font-family: 'Playball', cursive;
			color:white;
			font-size:50px;
		}

		.main_buttons{
			width:250px;
			margin-top:20px;
			margin-left:15%;
		}

		.login{	
			text-decoration: none;
			font-size: 22px;
			display:block;
			width:100%;
			padding-top:12px;
			padding-bottom:12px; 
			margin-bottom: 10px;
		}

		.register_bt{
			background-color: #DFCCB0;
			color:white;
			text-decoration: none;
			font-size: 22px;
			width:100%;
			display:block;
			padding-top:12px;
			padding-bottom:12px; 
		}

		@media screen and (max-width: 450px) {
  	 		.index_h1{
				font-size:40px;
				text-align: center;
			}
			.main_buttons{
				margin:0 auto;
				margin-top:20px;
			}
		} 
	</style>



	<body id = 'indexBody'>
		
		<div class = 'container-fluid'>
			<div class='row'>
				<h1 class='index_h1 col-sm-offset-1'>Create Your Own Blog</h1>
			</div>
		</div>

		<div class= 'main_buttons'>
			<a href = '#login' class= 'login btn btn-success  animated bounceInLeft' data-toggle = 'modal'>Log In</a>
			<a href = '#register' class= 'register_bt btn btn-default animated bounceInLeft' data-toggle = 'modal'>Sign Up</a>
		</div>

				
		
		<?php require('login/login_form.php'); ?>
		<?php require('include/scripts.php'); ?>

	</body>

	


</html>



