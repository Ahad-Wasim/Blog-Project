<?php
session_start();

if (!isset($_SESSION['user_information'])) {
    echo 'you are not logged in. Please log in or sign up to post awesome blogs';
    header("location: ../login/login_form.php");
    return;
}
if (isset($_GET['article_id'])) {
    $single_article = true;
}
else{
	$single_article = false;
}
?>




<!DOCTYPE html>


<html>
	<head>
		<title>Create Blog</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<!-- <link rel = 'stylesheet' href = '../assets/css/main.css'> -->
		<link rel ='stylesheet' href = '../assets/css/animate.css'>
		<link href='http://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>


	</head>

	<style>
	.content{
		width:1034;
	}
	section{
		height:400px;
		width:100%;
		box-sizing:border-box;
	}

	.profile{
		position: relative;
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
		width:55%;
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
		color:white;
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
		color:white;
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
		padding: 4px 9px 5px 8px;
		border:1px solid white;
		color:white;
	}
	.logout-button{
		background:transparent;
		border:none;
		border:1px solid white;
		font-size: 20px;
		padding: 4px 9px 5px 8px;
		margin-left:5px;
		color:white;
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

		<!--<form action = 'blog_validation.php' method = 'POST'>      This was using the post method-->

		<aside>
		</aside>

		<style>
			#adding{
				background:#222;
				display:block;
				height:550px;
			}
			.awesome-blog{
				color:white;
				font-family: 'PT Sans', sans-serif;
				font-size: 49px;
				font-weight: bold;		
			}

			form{
				display:block;
			}

			.form-section{
				width:705px;
				margin-left:100px;
				position: relative
			}
			

			html{
	    		background:#BFBAB3;
	    	}
	    	label{
	    		display:block;
	    		width:90%	;
	    		color:white;
	    		margin:0 auto;	
	    	}

			input{
				display:block;
				width:90%;
				margin:0 auto;
			}

			textarea{
				display:block;
				width:90%;
				margin:0 auto;
			}

			.submit_blog{
				position:absolute;
				right:0;
			}


		</style>

		

		<article id='adding'>
		
		<?php 
			if(!$single_article){    		// if single article is false display this else don't display anything at all.
		?>
			<form role = 'form' class = 'container' action="blog_validation.php" method="post" enctype="multipart/form-data"> 
			
			<h1 class= 'col-xs-offset-2 awesome-blog'>Create Your Awesome Blog</h1>
				
				<div class = 'form-section'>
					<label for ='title' >Title:</label><br>
					<input id = 'title' type ='text' name = 'title' placeholder = 'Give your blog a title'  ><br>
				

				
					<label for = 'date'>Date:</label><br>
					<input id='date' type = 'text' name = 'date' placeholder = 'When was this event' ><br>
				

				
					<label for= 'highlight'>Highlight:</label><br>
					<input id= 'highlight' type='text' name = 'highlight' placeholder = "Write a quick statement to describe your blog post" ><br>
				
				
					<label>Blog:</label><br>
					<textarea placeholder= "Write your blog here" name = 'blog' ></textarea><br>
	   
	    			<input type="file" name="fileToUpload" id="fileToUpload">

					<button  type = 'submit' class= 'submit_blog btn btn-primary' id ='post_blog'>POST BLOG</button>
				</div>


	    	</form>

	    	<?php	
			}
	    	?> 


	    </article>


	    <div class = 'display_container'>
	 
	   <?php
		include 'retrieve_blog.php';
 		// this will grab the echo from the retrieve blog file and display it below here
 		?> 

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
						<h2> <?php print_r($_SESSION['user_information']['name']);?> </h2>
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
							<a href = '../practice.php' class = 'home-button'>Home</a>
							<a href = '../login/log_out.php' class = 'logout-button'>Logout</a>
						</div>
					</div>
				</div>

			</aside>





		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>	
		<script type = "text/javascript" src="../assets/javascript/ajax.js"></script>
		<script src ='../assets/css/wow_js/wow.js'></script>
		<script>
			 new WOW().init();
		</script>
		


		
		<script>
		$(document).ready(function(){
			// colors the articles

			var color_array = ['#BFBAB3','#BBC0AA','#C0A894', '#D9D1B9'];
			//var articles = document.querySelector('article');
			//var color_array = ['','','', ''];
			
			var section = $('section');

			var color_counter = 0;

			var links = [];

			var content = document.querySelectorAll('.header_bar h1');

			


			for(var j = 0;j<section.length;j++){
				var color = color_array[color_counter];
				section[j].style.background = color;
				

				links.push(section[j]);

				color_counter ++;
				if(color_counter > color_array.length-1){
					color_counter = 0;
				}
			}


			// Adding links to the page
			
			for(var i =0;i<content.length;i++){
			    
				content[i].style.color='gold';		// if i want to add animations to that i would have to use that add class method
				content[i].style.fontSize='20px';
				console.log($(content[i]).parents('article').attr('id'));
				var aTag = $('<a>').attr('href','#'+$(content[i]).parents('article').attr('id'));
				aTag.append(content[i].innerHTML); 
				$('aside').append(aTag);
			}

			// Adding Links to the Page

		});
		

			// colors the articles
		</script>


		<!-- <script>
			$('.80').css({'background': 'url(../assets/css/images/hrBlogBackground/6-High-Resolution-Colored-Background-Textures-01.jpg);'});
		</script> -->


	


	</body>

</html>
