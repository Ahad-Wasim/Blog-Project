<style>


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
</div>