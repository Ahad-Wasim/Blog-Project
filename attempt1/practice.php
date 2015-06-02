<?php
session_start(); //since session is started whatever you require doesn't need to have a session start;
?>


<style>
	body{
		background:#eee;
	}

	header{
		border-bottom: 1px solid black;
		background: #222;
		color:white;
	}

	.login-status{
		margin-right: 3%;
	}

	.lin,.lout{
		border:2px solid white;
		color:white;
		text-decoration: none;
		font-size: 20px;
		padding:5px;
		float:right;
		margin-left: 5px;
	}

	.img-wrapper{
		width:200px;
		height:200px;
		margin:0 auto;
	}


	.profile{
		width:100%;
		height:100%;
	}

	.welcome-user{
		margin-left:5%;		
	}

	.user-profile-image{
		margin-top:30px;
	}
	.profile{
		border-radius:10px;
	}

	.img-button-wrapper{
		width:143px;
		margin:0 auto;
		margin-top:10px;
	}

	section{
		position:relative;
		top:15px;
		border:1px solid black;
		width:98%;
		height:500px;
		margin:0 auto;
		background: lavender;
	}

	.create-blog{
		margin-left: 50%;
	}

	.Personal-info{
		margin-top: 12px;
	}

	.Personal-info2{
		position:relative;
		top:10px;
	}


	/*footer{
		width:100%:;
		height:150px;
		background:black;
		position:absolute;
		bottom:0px;
		/*top:15px;*/
		-webkit-transform-style: preserve-3d;
 		-moz-transform-style: preserve-3d;
  		transform-style: preserve-3d;
	}

	footer h2{
		text-align: center;
		color:white;
		position: relative;
  		top: 50%;
  		transform: translateY(-50%);
	}*/

</style>

<head>
	<title>Practice</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel ='stylesheet' href = "bootstrap/css/bootstrap.min.css">   
	<link rel = 'stylesheet' href = 'assets/css/responsive.css'>
	<link rel = 'stylesheet' href = 'assets/css/animate.css'>
</head>


<body>

	<header>
		<div class = 'login-status'>
			<a href = 'index.php' class = 'lin'>Log In </a>
			<a href = "login/log_out.php" class = 'lout'>Logout</a>
		</div>

		<br>

		<div class = 'welcome-user'>
			<h1> Welcome <?php print_r($_SESSION['user_information']['name'])?> </h1>
		</div>
	</header>


	
		<section>
			<div class = 'container'>
				
					<div class = 'col-xs-3 user-profile-image'>
						<div class='img-wrapper'>
							<img  class = 'profile' src = 'assets/css/images/profile.png'>
						</div>

						<div class = 'img-button-wrapper'>
							<button class = 'btn btn-primary'>Change Profile Pic</button>
						</div>
					</div>

					<div class = 'col-xs-offset-1 col-xs-4 Personal-info'>
						<h3>Name: <?php print_r($_SESSION['user_information']['name'])?></h3>
						<h3>Email: <?php print_r($_SESSION['user_information']['email']) ?></h3>
						<h3> Recent Comments:<span> 0</span></h3>
						<h3> Number of Posts:<span> 15<span></h3>
					</div>

					<div class = 'col-xs-offset-1 Personal-info2'>
						<h3>Edit Profile</h3>
						<h3>Manage My Account</h3>
						<h3>Change Username</h3>
						<h3>Change Password</h3>
					</div>

					<br></br></br><br>
					<a class=' wow animated fadeInLeft create-blog btn btn-primary' href = 'blog_form/blog_inputs.php'>Create Your Own Blog</a>
							
			</div>
		</section>

		<style>
			footer{
				width:100%;
				background:black;
				position:absolute;
				bottom:0px;
			}

			footer h2{
				color:white;
				text-align: center
			}
		</style>

		<footer>
			<h2> Ahad Wasim -- Blog Project </h2>
		</footer>

	

</body>