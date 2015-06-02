<?php
session_start();					//starts the session

require ('mysqli_connect.php');		// this connects it to the database

if (isset($_POST['user_name']) && isset($_POST['password'])) {	 		//if we are retrieving things from a username and password
    if (!empty($_POST['user_name']) && !empty($_POST['password'])) {	// if username and password is not empty
        echo 'it is set ' . $_POST['user_name'] . ' ' . $_POST['password'];		// we are set
        $username = $_POST['user_name'];										// we then declare the username variables
        $password = sha1($_POST['password']);									// when then declare a password but it is encrypted
    } 
    else if (empty($_POST['user_name']) && empty($_POST['password'])) {			// else if they are BOTH empty
        echo "please fill in your username input field and your password input field";	// these will be blank
    } 
    else if (empty($_POST['user_name'])) {			// if just username is empty
        echo "please fill in your username";		// print this
    } 
    else {
        echo "please fill in your password";   		// else password is empty
    }
} 
else {
    echo 'We have failed to recieve a post connection';		// we have never recieved a post connection  
}

$query = "SELECT * FROM users_table WHERE username='$username' AND password = '$password'";		// go to the username and where username equals password and password equals the same password

$result = mysqli_query($CONN, $query);		//grab teh connection and put the query inside

if (mysqli_num_rows($result) > 0) {					// if the results returned is greater than zero
    $user_info = mysqli_fetch_assoc($result);		// ACTUALLY GRAB THE RESULTS and then converts it into an ASSOCIATIVE ARRAY and then store them inside $user_info
    $_SESSION['user_information'] = $user_info;		//	THIS IS WHAT IT LOOKS LIKE  look below
    //print_r($_SESSION['user_information']);		Array ( [username] => awasim [password] => 3222663e2753b84bbf5368fd9cd80434d8fc79a1 [name] => Ahad Wasim [email] => ahadwasim@yahoo.com [user_id] => 1 )
    echo " <br>  The user has successfully logged in";		
   header("location: ../practice.php");					// redirect to the main page
} 
else {
    echo "Sorry Incorrect Username or Password";  	// we havent returned anything from the database then we definately had problems.
}
?>