



<?php
	session_start();

//This alert is not working

	/*
	echo "<script type='text/javascript'>

	if(alert('Are you sure you want to log out')=== true){
		return
	} else {
		/document.location.href='../blog.php'
	}

		</script>";

		*/




?> 
	
	

<?php
	session_destroy();

	header("location: ../index.php");
?>





?>