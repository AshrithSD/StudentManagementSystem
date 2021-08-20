<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background:url(laptop-on-table.jpg);background-repeat: no-repeat; background-size: cover; ">
<!-- <body> -->
<!-- <img src="laptop-on-table.jpg" width="100%" height="100%"> -->
	<center><br><br>
	<h3>Student Management System</h3><br>
	<form action="" method="POST">
		<input type="submit" name="admin_login" value="Admin Login" required>
		<input type="submit" name="student_login" value="Student Login" required>
	</form>
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	?>
	</center>
</body>
</html>
<!-- <body style="background: url(https://ii1.pepperfry.com/media/catalog/product/f/o/1100x1210/foldable-multi-purpose-laptop-table-by-story-home-foldable-multi-purpose-laptop-table-by-story-home-2wzv7l.jpg); background-repeat: no-repeat; background-size: cover; "> -->
