<!--
<form action='' method='POST'>
	Name: <input type = 'text' name='name'>
	Email: <input type = 'email' name = 'email'>
	Username: <input type ='text' name = 'user_name'>
	Password: <input type = 'text' name = 'password'>
</form>
-->

<!DOCTYPE html>


<html>
	<head>
		<title>Register</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel ='stylesheet' href = "../bootstrap/css/bootstrap.min.css">   -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel = 'stylesheet' href = '../assets/css/main.css'>

	</head>

	<body>

		<!--<form action = 'blog_validation.php' method = 'POST'>      This was using the post method-->

		

		<section id='adding'>
		<form> 

		title: <input type ='text' name = 'title'><br><br>

		Date: <input type = 'text' name = 'date'><br><br>

		Highlight:<input type='text' name = 'highlight' placeholder = "Write a quick statement to describe your blog post"><br><br>

		Blog: <textarea placeholder= "Write your blog here" name = 'blog'></textarea><br><br>

			<button  type = 'button' id ='post_blog'>POST BLOG</button>

	    </form>
	    </section>

	    





		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>	
		<script type = "text/javascript" src="../assets/javascript/ajax.js"></script>
	</body>

</html>
