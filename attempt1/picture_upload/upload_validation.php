<?php
print_r($_POST);
print_r($_FILES);
exit;

	$connection = mysqli_connect('localhost', 'root', '', 'blog_database');		// this will be connecting to our data


	$target_dir = 'upload/';					//make a variable, $target_dir, which indicates where files will be uploaded.  In this case, the uploads directory.  Don't forget the separating / between the directory and any file that will come after.
	$target_file = $target_dir . $_FILES['fileToUpload']['name'];		//make a variable, $target_file, that combines the target directory with the uploaded file name.  This can be found in the $_FILES superglobal, in the fileToUpload key, in the name subkey
	//print_r("hello " . $_FILES['fileToUpload']['name']);

	$uploadOK = true;							//set an initial flag to indicate success.  $uploadOK.  Set it initially to true

	if(empty($_FILES['fileToUpload']['tmp_name'])){
		echo 'Please actually upload an image';	
		header("location: picture_form.php");
	};


	if(isset($_POST))  {						//see if we have a post superglobal variable for the submit field

	if(file_exists($target_file) == 1){			//check if the $target_file exists with the file_exists() function
		echo "We already have that file";  						//echo out an error message that we already have the file
		$uploadOK = false;										//set our $uploadOK to false
}
	else if($_FILES['fileToUpload']['size'] > 3000000 ){		//check if the file's size is not greater than 3 megabytes.  File size can be found in the $_FILES superglobal for our fileupload field.
		echo "This file is too large";					//echo an error message that it is too large
		$uploadOK = false; 									//set our $uploadOK flag to false
	}
}
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);			//using the pathinfo function, get our $target_file extension with PATHINFO_EXTENSION as the second argument
	$acceptable_types = ['jpeg','gif','png', 'jpg'];	//make an array, $acceptable_types, with the file extensions (without period), for jpeg, gif, and png.  jpeg can have two extensions, jpeg and jpg
	if(!in_array($imageFileType, $acceptable_types)){     // use the in_array function to see if $imageFileType is the same as one of the elements in $acceptable_types
		echo "We only want images with extensions of .jpeg .gif .png .jpg";//echo an error message that the file type is not one of those!
		$uploadOK = false;//set our $uploadOk flag to false
}

	if($uploadOK){//if $upLoadOk is true
		$image = addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));

		$image_name = addslashes($_FILES['fileToUpload']['name']);
		

		$insert = "INSERT INTO image_table (`id`,`name`,`image`) VALUES  ('','$image_name','$image')";

		$result = mysqli_query($connection, $insert);


	    $move_succeeded = move_uploaded_file($image,$target_file);	// MOVE THE TEMP FILE INTO THE DIRECTORYIF ERROR IT RETURNS FALSE		//set a variable, $move_succeeded, to the results of the move_uploaded_file function.  The move_uploaded_file needs the tmp_name key of your $_FILES superglobal value for the filetoupload key
	    if($move_succeeded){				 							//if $move_succeeded is true
	    echo "Good job. The file has uploaded";  						//echo a success message for the upload
	       
	    } else if ($move_succeeded = false) {						//else if $move_succeeded wasn't true
	        echo "The file had failed to move"; 					//echo a failure message, because the move failed
	    }

	    } else if ($uploadOK == false){						//else if the $uploadOk wasn't true

		echo "<br> Please consider chaning your upload file!";				//echo a failure message, because some criteria didn't match
	}

	?>