
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