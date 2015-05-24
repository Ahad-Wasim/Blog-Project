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
		<title>Register</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel ='stylesheet' href = "../bootstrap/css/bootstrap.min.css">   -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel = 'stylesheet' href = '../assets/css/main.css'>
		<link rel ='stylesheet' href = '../assets/css/animate.css'>


	</head>

	<body>

<a href = '../blog.php' style=>Click here to go to the main page</a>

		<!--<form action = 'blog_validation.php' method = 'POST'>      This was using the post method-->

		<aside>
		</aside>

		<style>
			#adding{
				background:grey;
				display:block;
			}

			form{
				display:block;
				border:1px solid black;
			}
			

			html{
	    		background:#BFBAB3;
	    	}

			input{
				width:50%;
			}

			textarea{
				width:50%;
			}


		</style>






		

		<section id='adding'>
		
		<?php 
			if(!$single_article){    		// if single article is false display this else don't display anything at all.
		?>
			<form class = 'container' action="blog_validation.php" method="post" enctype="multipart/form-data"> 

				<label>Title:</label><br>
				<input type ='text' name = 'title' placeholder = 'Give your blog a title'  ><br><br>

				<label>Date:</label><br>
				<input type = 'text' name = 'date' ><br><br>

				<label>Highlight:</label><br>
				<input type='text' name = 'highlight' placeholder = "Write a quick statement to describe your blog post" ><br><br>

				<label>Blog:</label><br>
				<textarea placeholder= "Write your blog here" name = 'blog' ></textarea><br><br>
   
    			<input type="file" name="fileToUpload" id="fileToUpload">

				<button  type = 'submit' id ='post_blog'>POST BLOG</button>

	    	</form>

	    	<?php	
			}
	    	?> 
	    

	    </section>


	   

	    <div class = 'display_container'>
	 
	   <?php
		include 'retrieve_blog.php';
 		// this will grab the echo from the retrieve blog file and display it below here
 		?> 

	    </div>





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
			
			var articles = $('article');

			var color_counter = 0;

			var links = [];

			var content = document.querySelectorAll('.header_bar h1');

			


			for(var j = 0;j<articles.length;j++){
				var color = color_array[color_counter];
				articles[j].style.background = color;
				

				links.push(articles[j]);

				color_counter ++;
				if(color_counter > color_array.length-1){
					color_counter = 0;
				}
			}

			
			for(var i =0;i<content.length;i++){
			    
				content[i].style.color='gold';		// if i want to add animations to that i would have to use that add class method
				content[i].style.fontSize='20px';
				console.log($(content[i]).parents('article').attr('id'));
				var aTag = $('<a>').attr('href','#'+$(content[i]).parents('article').attr('id'));
				aTag.append(content[i].innerHTML); 
				$('aside').append(aTag);
				


			}



		});
		

			// colors the articles
		</script>





	


	</body>

</html>
