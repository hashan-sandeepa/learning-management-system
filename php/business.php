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
         <p id="title">LMS - School of Business</p>
			<a href = "logout.php" id="logout">Sign Out</a>
			<p id="username">Logged as <?php echo $user_check ?>  | <p> 
		</div>
	</div>
	<div id="slider">
		<img src="../image/banner.jpg" width="100%" height="350px">
	</div>
	<div id="container"style="height:600px;">
		<center>
		<ul>
		<li style="width:450px"><a title="Click to enter this course" href="business-subjects/management-practice.php" target="_blank">Management Practices 17.1</a></li>

		<li style="width:450px"><a title="Click to enter this course" href="business-subjects/computer-science-fundamentals.php" target="_blank">NSBM-FP-1105 Computer Science Fundamentals</a></li>

		<li style="width:450px"><a title="Click to enter this course" href="business-subjects/personal-and-managerial-effectiveness.php" target="_blank">NSBM-FP-1312 Personal and Managerial Effectiveness</a></li>

		<li style="width:450px"><a title="Click to enter this course" href="business-subjects/fundamentals-of-mathematics.php" target="_blank">NSBM-FP-1103 Fundamentals of Mathematics</a></li>

		<li style="width:450px"><a title="Click to enter this course" href="business-subjects/fundamentals-of-economics.php" target="_blank">NSBM-FP-1102 Fundamentals of Economics</a></li>

		<li style="width:450px"><a title="Click to enter this course" href="business-subjects/business-english.php" target="_blank">NSBM-FP-1101 Business English</a></li>

		<li  style="width:450px"><a title="Click to enter this course" href="business-subjects/introduction-to-computer-applications.php" target="_blank">NSBM-FP-1209 Introduction to Computer applications</a></li>

		<li  style="width:450px"><a title="Click to enter this course" href="business-subjects/introduction-to-graphic-design.php" target="_blank">NSBM-FP-1208 Introduction to Graphic Design</a></li>

		<li  style="width:450px"><a title="Click to enter this course" href="business-subjects/business-theory-and-environment.php" target="_blank">NSBM-FP-1207 Business theory and environment</a></li>

		<li  style="width:450px"><a title="Click to enter this course" href="business-subjects/quantitative-techniques.php" target="_blank">NSBM-FP-1206 Quantitative Techniques</a></li>

		</ul>
		</center>
	</div>
	<div id="footer">
		<center><p>Copyright © All rights reserved</p></center>
	</div>
</div>
</body>
</html>
