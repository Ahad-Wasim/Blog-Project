<!-- <!-- DONT FOCUS TO MUCH ON THE STYLING -->

<?php
/*

<head>
		<title>Registeration Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--<link rel ='stylesheet' href = "bootstrap/css/bootstrap.min.css">   This is not working right now -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
		
	</head>


<style>

	form{
		  position: relative;
  		  top: 50%;
  		  transform: translateY(-50%);
	}

	.register_border{
		border: 3px solid #40D514;
		background:#2D2A2D;
		width:80vw;
		height:500px;
		border-radius:10px;
	}

	input{
		margin-top:3%;
	}

	label{
		margin-top:3%;
		color:#40D514;
	}
	.register{
		border:none;
		background: #40D514;
		color:white;
		text-shadow:.5px .5px black;
		font-size: 1.5em;
	}

	.register:hover{
		color:red;
	}
	h1{
		text-align: center;
		color:40D514;
	}
	h4{
		color:40D514;
	}

</style>


<form>
	<div class = 'container-fluid register_border'>
			<div class = 'row'>
				<h1>Registration</h1><br><br><br>
			</div>

			<div class = 'row' col->
				<h4 class = 'col-xs-3  col-md-offset-3 col-md-5'>Please Register Here<h4>
			</div>
			<div class = 'row'>
				<label class = 'col-xs-3  col-md-offset-3 col-md-1'>Name</label>
				<input type='text' name = 'fullname' class = 'col-xs-7 col-md-5' placeholder= 'Fullname'>
			</div>

			<div class = 'row'>
				<label class = 'col-xs-3  col-md-offset-3 col-md-1'>Email</label>
				<input type='text' name = 'email' class = 'col-xs-7 col-md-5' placeholder = 'abcd.yahoo.com'><br>
			</div>

			<div class = 'row'>
				<label class = 'col-xs-3 col-md-offset-3 col-md-1'>Username</label>
				<input type='text' name = 'fullname' class = 'col-xs-7 col-md-5'placeholder = 'yo mamma jamma'><br>
			</div>

			<div class = 'row'>
				<label class = 'col-xs-3  col-md-offset-3 col-md-1'>Password</label>
				<input type='password' name = 'password' class = 'col-xs-7 col-md-5' placeholder = 'password'><br>
			</div>

			<div class = 'row'>
				<input  class = 'col-xs-offset-7 col-md-offset-7 col-md-2 register' type = 'submit' value = 'Register'>
	</div>
					
			
				

		  

  </div> <!-- This closes container -->

</form> 
*/

?>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel ='stylesheet' href = "../bootstrap/css/bootstrap.min.css">   
	<link rel = 'stylesheet' href = '../assets/css/main.css'>
	<link rel = 'stylesheet' href = '../assets/css/responsive.css'>
	<link rel = 'stylesheet' href = '../assets/css/animate.css'>
	<link href='http://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
</head>

<style>
	.content{
		width:1034;
		awidth:85%;
	}
	section{
		height:400px;
		width:100%;
		box-sizing:border-box;
	}

	.profile{
		position: relative;
		background:#d7dec0;
		height:100%;
	}

	.image{
		display:inline-block;
		height:268px;
		width:268px;
		margin-left:3%;
		margin-top: 3%;
		box-sizing:border-box;
	}

	.article_pic{
		height:100%;
		width:100%;
	}

	.information-text{
		display:inline-block;
		border:1px solid black;
		width:60%;
		height:268px;
		margin-left:3%;
		vertical-align: top;
		margin-top: 3%;
		box-sizing:border-box;
		font-family: 'Inconsolata',sans-serif;
	}

	.title{
		border-bottom: 1px dashed black;
		text-align: center;
	}

	.date-comments-row{
		border-bottom: 1px dashed black;
	}

	.date-left{
		display: inline-block;
		margin-left:15%;
	}

	.main-info{
		font-family: 'Inconsolata',sans-serif;
	}
	
	.click-blog{
		display: block;
		margin-top: 3%;
	}
	.click-blog-button{
		width:175px;
		margin:0 auto;
	}
	.comments{
		display: inline-block;
		margin-left:30%;
	}

	/* Navigation Settings */

	.fixed-nav{
		background:black;
		width:222px;
		height:100vh;
		position: fixed;
		top:0px;
		right:0px;
		box-sizing:border-box;
	}



	/* Profile Links */

	.links{
		text-align: center;
	}

	.article-links ul{
		list-style-type: none;
		margin-left:0;
		padding: 0;
	} 
	.article-links ul a{
		text-decoration: none;
	}
	.article-links ul a:hover{
		color:green;
	}

	/* Profile Image */


	.profile-img-wrapper{
		width:100%;
		height:270px;
		position:absolute;
		bottom:50px;
		box-sizing:border-box;
	}

	.user-name{
		text-align: center;
		margin-bottom: 15px;
	}

	.image-wrapper{
		width:100%;
		margin-bottom:10px;
	}

	.profile-img{
		display:block;
		border-radius: 5px;				
		width:140px;
		height:130px;
		margin:0 auto	;
	}

	/* Logout-Home Page */
	.changeProfilePic{
		margin-top:10px;
		display:block;
	}

	.changeProfilePic-Button{
		width:123px;
		margin:0 auto;
	}

	.status{
		display:block;
		margin-top:22px;
	}

	.home-button{
		background:transparent;
		border:none;
		font-size: 20px;
		padding:2px 8px 2px 8px;
		border:1px solid white;
	}
	.logout-button{
		background:transparent;
		border:none;
		border:1px solid white;
		font-size: 20px;
		padding:2px 8px 2px 8px;
		margin-left:5px;
	}

	.home-button:hover{
		background:red;
	}

	.logout-button:hover{
		background:red;
	}

	.status-buttons{
		width:165px;
		margin:0 auto;
	}



</style>

<body>
			<div class = 'content'>
				<section>	
					<div class='profile'>

						<div class = 'image'>
							<img class='article_pic' src='http://farm3.static.flickr.com/2226/2140577195_61d14b7dc3.jpg'/>
						</div>

						<div class = 'information-text'>
							<div class = 'title'>
								<h3>FriendShip</h3>
							</div>

							<div class = 'date-comments-row'>
								<div class = 'date-left'>
									<h5>January 17th, 2015</h5>
								</div>

								<div class = 'comments'>
									<h5>No Comments</h5>
								</div>
							</div>

							<div class = 'main-info'>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							</div>
						</div>

						<div class = 'click-blog'>
							<div class = 'click-blog-button'>
								<button class= 'btn btn-success'>Click To View This Blog</button>
							</div>
						</div>

					</div>
				</section>
			</div> 



			<aside class = 'fixed-nav'>

				<div>
					<div class = 'links'>
						<h1>Links</h1>
						<div class = 'article-links'>
							<ul>
								<li><a>Static Text</a></li>
								<li><a>Static Text</a></li>
								<li><a>Static Text</a></li>
								<li><a>Static Text</a></li>
								<li><a>Static Text</a></li>
								<li><a>Static Text</a></li>
							</ul>
						</div>
					</div>
				</div>


				<div class ='profile-img-wrapper'>
					<div class = 'user-name'>
						<h2> Suzay </h2>
					</div>

					<div class = 'image-wrapper'>	
						<img class = 'profile-img person' src = 'http://storage.designcrowd.com/profile_pics/48295/48295_image_201502180201.png'> <!-- Add the actual file -->
					</div>

					<div class='changeProfilePic'>
						<div class = 'changeProfilePic-Button'>
							<button class= 'btn btn-primary'>Change Picture</button>
						</div>
					</div>

					<div class = 'status'>
						<div class = 'status-buttons'>
							<button class = 'home-button'>Home</button>
							<button class = 'logout-button'>Logout</button>
						</div>
					</div>
				</div>

			</aside>
		



	


</body>







