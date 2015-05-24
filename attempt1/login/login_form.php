<!-- <!-- <style>


form{
	border:1px solid black;
	display: inline-block;
	margin: 0 auto;
	padding:25px;
	background: #077FCD;
	border:10px solid white;
	border-radius:5%;
}

::-webkit-input-placeholder {
   color: red;
}

:-moz-placeholder { /* Firefox 18- */
   color: red;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color: red;  
}

:-ms-input-placeholder {  
   color: red;  
}

input{
	display:block;
	background:white;
	border:none;
	
}
input:focus{
	background: lavender;
}

label{
	color:blue;
	
}

.outer{
	border:5px solid grey;
	display:inline-block;
	border-radius:5%;
}



</style>


<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.5/animate.css">
<link rel ='stylesheet' href = '../assets/css/animate.css'>

</head>

<div class='outer'>
<form action='login.php' method = 'POST'>
	<img src = "learningfuze.png"><br>
	<label>Username:</label> <input type = 'text' name = 'user_name' placeholder='Username' class = 'username' size = '100'>
	<label>Password:</label> <input type = 'password' name = 'password' placeholder = 'Password' = class= 'password' size = '100'>
	<button type="submit" class="btn btn-danger animated bounce">Log In</button>
</form>
</div> -->


		<div class = 'modal fade' id = 'login'>
			<div class = 'modal-dialog'>
				<div class = 'modal-content'>
					<form action = 'login/login.php' class = 'form-horizontal' method = 'post'>	
						<div class ='modal-header'>
							<h1>Login</h1>
						</div>

						<div class ='modal-body'>
							<div class = 'form-group'>
								<label for ='loginInput' class = 'col-lg-2 control-label'>Username:</label>
								<div class = 'col-lg-10'>
									<input type = 'text' class = 'form-control' id = 'loginInput' name = 'user_name' placeholder='abcd@example.com'>
								</div>
							</div>

							<div class = 'form-group'>
								<label for ='password' class = 'col-lg-2 control-label'>Password:</label>
									<div class = 'col-lg-10'>
										<input type = 'password' class = 'form-control' id = 'password' name = 'password' placeholder='Enter Password'>
									</div>
							</div>
						</div>

					<div class ='modal-footer'>
						<a class = 'btn btn-default' id = 'close' data-dismiss = 'modal'>Close</a>
						<button class = 'sign_in btn btn-primary' type = 'submit'>Login</button>
						
					</div>
				</form>
				</div>
			</div>
		</div>



		<div class = 'modal fade' id = 'register'>
			<div class = 'modal-dialog'>
				<div class = 'modal-content'>
					<div class ='modal-header'>
						<h1>Register</h1>
					</div>

					<div class ='modal-body'>
						 <form action ='' method= 'post'>
							<div class = 'form-group'>
								<label for ='FullNameInput' class = 'col-lg-2 control-label'>Full Name:</label>
									<div class = 'col-lg-10'>
										<input type = 'text' class = 'form-control' id = 'FullNameInput' placeholder='John Doe'>
									</div>
							</div>

							<div class = 'form-group'>
								<label for ='UsernameInput' class = 'col-lg-2 control-label'>Username:</label>
									<div class = 'col-lg-10'>
										<input type = 'text' class = 'form-control' id = 'UsernameInput' placeholder='Yo Mamma Jamma'>
									</div>
							</div>

							<div class = 'form-group'>
								<label for ='email' class = 'col-lg-2 control-label'>Email:</label>
									<div class = 'col-lg-10'>
										<input type = 'text' class = 'form-control' id = 'email' placeholder='abcd@yahoo.com'>
									</div>
							</div>



							<div class = 'form-group'>
								<label for ='spassword' class = 'col-lg-2 control-label'>Password:</label>
									<div class = 'col-lg-10'>
										<input type = 'password' class = 'form-control' id = 'spassword' placeholder='Enter Password'>
									</div>
							</div>	
						  </form>
					</div>

					<div class ='modal-footer'>
						<a class = 'btn btn-default' id = 'close' data-dismiss = 'modal'>Close</a>
						<button class = 'sign_up btn btn-primary' type = 'submit'>Sign Up</button>
					</div>

				</div>
			</div>
		</div> 