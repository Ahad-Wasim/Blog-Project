
<?php
session_start(); //since session is started whatever you require doesn't need to have a session start;
?>

<style>

	.user-header{
		text-align: center;
	}

	.login-status{
		float:right;
		margin-right:5%;
	}

	.lin,.lout{
		border:2px solid black;
		text-decoration: none;
		padding:5px;
		font-size: 20px;
		margin-left: 5px;
		color:black;
	}
	
</style>


<html>

	<head>
		<title>Blog</title>
		<?php  include 'include/links.php'; ?>
	</head>


	<body>
	
		<div class = 'login-status'>
			<div class = 'login-status-buttons'>
				<a href = 'index.php' class = 'lin'>Log In </a>
				<a href = "login/log_out.php" class = 'lout'>Logout</a>
			</div>
		</div>

		<div class = 'main_articles'>  <!--container-fluid -->

			
		<?php
		if(isset($_SESSION['user_information']['name'])){
			?> 	<h1 class = 'user-header'> Welcome <?php print_r($_SESSION['user_information']['name']); ?> </h1>


		<?php } else {  ?>
			  	 
			  	 <h1>Welcome Please Log in</h1>
			  	 <h3>Don't have an account.</h3>
			  	 <h3>Sign up for our blog</h3> <?php
		} ?>
 


		<a href = "login/register.php">Click Here to sign up to comment on this blog</a><br><br>
		<a href = "blog_form/blog_inputs.php" class = 'btn btn-primary'>Click Here to create you Awesome blog</a>
		


		

			<?php
				require ("include/scripts.php");
			?>
		</div>
	</body>

</html>


