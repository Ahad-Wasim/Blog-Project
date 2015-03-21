<?php

	session_start();

	require('mysqli_connect.php');


	if(isset($_POST['user_name']) && isset($_POST['password'])){
		if(!empty($_POST['user_name']) && !empty($_POST['password'])){
			echo 'it is set ' . $_POST['user_name'] . ' ' . $_POST['password'];
			$username = $_POST['user_name'];
			$password = sha1($_POST['password']);
		} else if(empty($_POST['user_name']) && empty($_POST['password'])) {
			echo "please fill in your username input field and your password input field";
		} else if(empty($_POST['user_name'])){
			echo "please fill in your username";
		} else {
			echo "please fill in your password";
		}
	} else {
		echo 'Your Post is not working correctly';
	}

	$query = "SELECT * FROM users_table WHERE username='$username' AND password = '$password'";
	          

	$result = mysqli_query($CONN, $query);

	if(mysqli_num_rows($result) > 0){
		$user_info = mysqli_fetch_assoc($result);
		$_SESSION['user_information'] = $user_info;
		print_r( $_SESSION['user_information']);
		echo " <br>  Everything is a success";
		header("location: ../blog.php");
		

	} else {
		echo "Sorry Incorrect Username or Password";
	}







?>