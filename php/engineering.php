<!DOCTYPE html>
<?php
   include('session.php');
   
?>
<html>
<head>
	<title>LMS - Home</title>
	<link href="../css/home.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
</head>
<body style="width:1000px;margin-left:auto;margin-right:auto;" background="../image/background-photo.jpg">
<div id="main">
	<div id="header">
		<div>
         <p id="title">LMS - School of Engineering</p>
			<a href = "logout.php" id="logout">Sign Out</a>
			<p id="username">Logged as <?php echo $user_check ?>  | <p> 
		</div>
	</div>
	<div id="slider">
		<img src="../image/banner.jpg" width="100%" height="350px">
	</div>
	<div id="container" style="height:400px">
		<center>
   		<p style="font-size:25px;">NO COURSES IN THIS CATEGORY</p>
		</center>
	</div>
	<div id="footer">
		<center><p>Copyright © All rights reserved</p></center>
	</div>
</div>
</body>
</html>
