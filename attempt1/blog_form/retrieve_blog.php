<?php
	
	$connection = mysqli_connect('localhost', 'root', '', 'blog_database');

	$query = "SELECT * FROM article_table";

	$result = mysqli_query($connection,$query);

	$output = [];

	$html = '';

	
	while($blog = mysqli_fetch_assoc($result)){
		$title = $blog['title'];
		$date = $blog['date'];
		$highlight = $blog['highlight'];
		$main_blog = $blog['blog'];
		$date_posted = $blog['date_posted'];
		$user_id = $blog['user_id'];
		//print_r($title . '<br>' . $date . '<br>');
		//print_r($blog);


			$html .= "<p>$title</p>";  
		


			
			//"<article class = '$user_id'><div class = 'content_border container-fluid'><div class = 'inside_image'><div class = 'innner_inside_image'>dssffda</div></div><div class = 'text_border'>	<div class = 'header_bar'><h1>'$title'</h1></div><div class = 'date'><small class = 'small'>'$date'</small>  <small class= 'small_comments'>'$date_posted'</small></div><div class 'sentence'>'$highlight'</div><p>'$main_blog'</p></div></div></article>";
	}
	

	




	if(mysqli_num_rows($result)>0){
		$output = ['success' => true, 'html' => $html];	
	} else {
		$output['success'] = false;
		echo 'We have failed to retrieve the result my master';
	}

	echo json_encode($output);


/*
"<article class = '$user_id'>

							<div class = 'content_border container-fluid'>
						
								<div class = 'inside_image'>
									<div class = 'innner_inside_image'>dssffda</div>
								</div>
						
							<div class = 'text_border'>	
							
								<div class = 'header_bar'><h1>'$title'</h1></div>
							

								<div class = 'date'><small class = 'small'>'$date'</small>  <small class= 'small_comments'>'$date_posted'</small></div>
							
								<div class 'sentence'>'$highlight'</div>

								<p>'$main_blog'</p>


							</div>
						
							</div>
	
				
						</article>";
	}

*/
?>
