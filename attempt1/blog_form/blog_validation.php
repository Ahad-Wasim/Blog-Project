<?php
session_start();
$error = [];
$output = [];



//if(isset($_POST['title']) && isset($_POST['date']) && isset($_POST['highlight']) && isset ($_POST['blog']))


if(isset($_POST)){															// if were getting post from the submit form
		$target_dir = '../picture_upload/upload/';							// location of the file to upload to			
		$target_file = $target_dir . $_FILES['fileToUpload']['name'];		// The TARGET DIRECTORY + THE NAME OF THE FILE
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);			// this is getting the path info extension LIKE .JPEG OR .PNG	
		$acceptable_types = ['jpeg','gif','png', 'jpg'];					// We want to get this value
	
		//print_r($_FILES['fileToUpload']['tmp_name']);

	//echo "The post is connecting to this file. <br>";
		
		if(empty($_POST['title'])){											// if the title field is left blank
			$error['title'] = "Please enter in a title for your blog. <br>" ;		//error this message
		}
		if(empty($_POST['date'])){											// if the date field is left blank
			$error['date'] = 'Date must be set. <br>';						// error this message
		}
		if(empty($_POST['highlight'])){										// if the highlight field is left blank
			$error['highlight'] = 'Your highlight is empty. <br>';			//etc
		}
		if(empty($_POST['blog'])){											//etc
			$error['blog'] =  "your blog is empty. <br>"; 
		}
		if(empty($_FILES['fileToUpload']['tmp_name'])){						// if this is empty their are problems transferring files
			$error['image'] = 'Please actually upload an image';			// we'll store the error as $error[image]
		}
		/*else if(file_exists($target_file) == 1){							//if the file exist from our record
			$error['image'] = "We already have that file";  				// its an error
		}*/
		else if($_FILES['fileToUpload']['size'] > 6000000 ){				// if the size is greater than 6 megabits
			$error['image'] = "This file is too large";						// its an error
		}
		else if(!in_array(strtolower($imageFileType), $acceptable_types)){     // lowercase everything.  if jpeg etc. is not in array
			$error['image'] = "We only want images with extensions of .jpeg .gif .png .jpg"; //another error message
		}

		//echo 21;

		if(count($error) == 0){												// if we have 0 ERRORS
			$title = addslashes($_POST['title']);							// example o'reilly == o/'reilly
			$date = addslashes($_POST['date']);								// security
			$highlight = addslashes($_POST['highlight']);					// security
			$blog = addslashes($_POST['blog']);								// security
			$exact_time = time();											// this will be the exact time
			$date_posted = date('M j Y', time());							// Date posted will equal Month date year of the current time

			

			// ------ START File upload handling
			$image = ($_FILES['fileToUpload']['tmp_name']);					// storing the temporary server location of the file into a variable
			$image_name = ($_FILES['fileToUpload']['name']);				// grabbing the name of the file  ex.  hello.jpg
			$move_succeeded = move_uploaded_file($image,$target_file);		// move the $image(temporary server location) to the directory (upload/ + [the file name]) or in easier context MOVING THE TEMPORARY SERVER LOCATION TO THE ACTUAL UPLOADS FOLDER
			if($move_succeeded === false){									// if false file failed to move
			echo "Their has been problems moving the files";
			}																

			// ------ END File upload handling

			
			//echo $title . $date . $highlight . $blog . $date_posted ;

			



			$connection = mysqli_connect('localhost', 'root', '', 'blog_database');		// were connecting to the blog database
			if(!isset($_SESSION['user_information']) && empty($_SESSION['user_information'])){ // if the session is not set and it is empty
			echo "To create a post you have to be logged in. Please log in <br>";
			echo "<a href = '../login/login_form.php'>Click Here to Login</a>";
			exit;  // we don't want to continue after this function because we will use the header('location') and if the code runs after this we will then be redirected to the header page and will never be able to see our user not loggin in error
			}

			$user_id = $_SESSION['user_information']['user_id'];		//WE HAVE TO CONNECT TO THE DATABASE FIRST this is grabbing the session and the user_id AND STORING THAT IN A VARIABLE CALLED USER_ID
			$query = "INSERT INTO article_table (`title`, `date`, `highlight`, `blog`, `date_posted`,`exact_time`, `image`, `user_id`) VALUES ('$title', '$date', '$highlight', '$blog', '$date_posted',$exact_time, '$image_name', $user_id)"; //inserting all that into the user
			
			$result = mysqli_query($connection, $query);		// were now connecting to the database and inserting all the input fields inside their

			$output['success'] = true;							// now the output success will be true;	THIS WILL BE USEFUL FOR AJAX
			$output['message'] = "Everything seems to be inserting just fine";	// this will be the message corresponding to that
			
		} else {
			$output['success'] = false;				// else if we had an error
			$output['message'] = '';				// message would then be false
			foreach($error as $key => $value) {
				$output['message'] .= $key.':'.$value;  //list all the spots in which errors had occured within our code.
			}
			print_r($output);							// print the output so we can see it. NOTICE THIS WILL CAUSE US TO GOT TO THE NEW PAGE
			exit;										// this will stop executing the code below
		}

		header('Location: blog_inputs.php');			// we will then go from the blog_validation.php (form) back to our ACTUAL BLOG




} else {
	echo json_encode($error);			// this will encode it into a json file(usually meant for ajax because ajax can only read JSON) error would just be blank
	
	echo 'The post was never set';		// basically echoing the problem
}

	echo json_encode($output);			// it will never get here this will be blank 


?>



