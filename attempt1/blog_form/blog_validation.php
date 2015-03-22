<?php

$error = [];
$output = [];

//if(isset($_POST['title']) && isset($_POST['date']) && isset($_POST['highlight']) && isset ($_POST['blog']))
if(isset($_POST)){
	//echo "The post is connecting to this file. <br>";
		if(empty($_POST['title'])){
			echo $error['title'] = "Please enter in a title for your blog. <br>" ;
		}
		if(empty($_POST['date'])){
			echo $error['date'] = 'Date must be set. <br>';
		}
		if(empty($_POST['highlight'])){
			echo $error['highlight'] = 'Your highlight is empty. <br>';
		}
		if(empty($_POST['post_blog'])){
			echo $error['post_blog'] =  "your blog is empty. <br>"; 
		}

		//echo 21;

		if(count($error) == 0){
			$title = $_POST['title'];
			$date = $_POST['date'];
			$highlight = $_POST['highlight'];
			$blog = $_POST['post_blog'];
			$date_posted = date('M j Y', time());

			//echo $title . $date . $highlight . $blog . $date_posted ;

			$connection = mysqli_connect('localhost', 'root', '', 'blog_database');

			$query = "INSERT INTO article_table (`title`, `date`, `highlight`, `blog`, `date_posted`) VALUES ('$title', '$date', '$highlight', '$blog', '$date_posted')";
		
			$result = mysqli_query($connection, $query);

			$output['success'] = true;
			$output['message'] = "Everything seems to be inserting just fine";
			
		} else {
			$output['success'] = false;
			$output['message'] = 'You have an error You need to go back and fill in the require fields';
			echo $error;
		}



} else {
	echo 52;
	echo json_encode($error);
	
	echo 'There is a problem within our Post Code';
}

echo json_encode($output);


?>

