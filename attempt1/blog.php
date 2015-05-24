
<?php
session_start(); //since session is started whatever you require doesn't need to have a session start;
?>



<!DOCTYPE html>

<html>

	<head>
		<title>Blog</title>
		<?php  include 'include/links.php'; ?>
	</head>

<style>
	html {
		background: #BBC0AA;
	}
</style>

	<body>


		<div class = 'main_articles'>  <!--container-fluid -->

		<?php
			require ("header.php");

		?>



	<?php
		require ("include/scripts.php");
	?>
	
	</body>

</html>


