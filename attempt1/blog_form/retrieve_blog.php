<?php
	
	$connection = mysqli_connect('localhost', 'root', '', 'blog_database'); 		//connecting it to the blog database

	$query = "SELECT * FROM article_table ORDER BY exact_time DESC";				// select from the article table but organize it from the most recent time first because that would display the latest blog post

	$result = mysqli_query($connection,$query);				// connect to the mysql query

	$output = [];					// output equal empty

	$html = '';						
	$article = '';					

	if(mysqli_num_rows($result)>0){					// if we return something from the result
		
		while($blog = mysqli_fetch_assoc($result)){		// fetch it and put it into an associative array and store it as blog  // Will fetch the result continuously from the articles table in the database
			$title = $blog['title'];					// grab the title column from the database and store that in a a variable called titele
			$date = $blog['date'];						// etc
			$highlight = $blog['highlight'];			// etc
			$main_blog = $blog['blog'];					// etc
			$date_posted = $blog['date_posted'];		// etc
			$exact_time = $blog['exact_time'];			// etc
			$user_id = $blog['user_id'];				// The user_id we got from the blog validation from the $_SESSION
			$image = $blog['image'];					// Grab the image name from the blob
			$article_id = $blog['id'];					// Grabs the id
			//print_r($title . '<br>' . $date . '<br>');
			//print_r($blog);

				$fade_class = 'fadeInRight'; 			// Right now the default is fade in right
				

				if($article_id % 2 == 0){				// if the articles specific id is divisble by two then we add fadeInLeft
					$fade_class = 'fadeInLeft';
				}



				// We may want to change this			//NOTICE ON LINE 45 WE ARE DIRECTING THE FILE INSIDE THE CODE AND JUST INSERTING THE IMAGE NAME SO WE GRAB THE EXACT IMAGE
				
				$html .= "<a name ='$user_id'></a>
				<article class = '$article_id  wow animated $fade_class' id = '$article_id'>
					<div class = 'content_border container'>
						<div class = 'inside_image'>
							<div class = 'innner_inside_image'>
								<img src='../picture_upload/upload/$image'> 
							</div>
						</div>
						<div class = 'text_border'>
							<div class = 'header_bar'><h1>'$title'</h1></div>
							<div class = 'date'><small class = 'small'>'$date'</small>  <small class= 'small_comments'>'$date_posted'</small></div>
							<div class 'sentence'>'$highlight'</div>
							<p>'$main_blog'
								<a href ='#' class = 'candy'>Click Here to go to  a new page</a>
							</p>

						</div>
					</div>
				</article>";




				

	//  ../picture_upload/picture_form.php

			//$article .= "<a href = #$article_id>$title</a>";
				
		}


		//echo $article; // this will echo the links
	    

	    echo $html;  // this will just echo the html WHEN WE RETRIEVE IT WE SHOULD JUST ECHO OUT ONE THING
		

		$output =['success' => true, 'html' => $html, 'article' => $article]; //'article' =>  $article]);		// this is meant for the ajax
	
	} else {
		$output['success'] = false;									// would return false if we didn't recieve any rows 
		echo 'We have failed to retrieve the result my master';
	}
	
	//echo json_encode($output);



?>
