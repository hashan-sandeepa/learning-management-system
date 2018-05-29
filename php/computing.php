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
         <p id="title">LMS - School of Computing</p>
			<a href = "logout.php" id="logout">Sign Out</a>
			<p id="username">Logged as <?php echo $user_check ?>  | <p> 
		</div>
	</div>
	<div id="slider">
		<img src="../image/banner.jpg" width="100%" height="350px">
	</div>
	<div id="container" style="height:600px">
		<center>
   		
   		<ul class="unlist">
		<li style="width:450px"><a title="Click to enter this course" href="computing-subjects/programming-with-c-sharp.php" target="_blank">CS107.3 Programming with C# -Plymouth Group A </a></li>

		<li style="width:450px"><a title="Click to enter this course" href="computing-subjects/quantitative-techniques-for-computing.php" target="_blank">BMIS102 Quantitative Techniques for Computing</a></li>

		<li style="width:450px"><a title="Click to enter this course" href="computing-subjects/computer-technology.php" target="_blank">BMIS104 Computer Technology</a></li>

		<li style="width:450px"><a title="Click to enter this course" href="computing-subjects/system-software.php" target="_blank">BMIS110 System Software</a></li>

		<li style="width:450px"><a title="Click to enter this course" href="computing-subjects/system-design-project.php" target="_blank">BMIS113 System Design Project</a></li>

		<li style="width:450px"><a title="Click to enter this course" href="computing-subjects/communication-and-networks.php" target="_blank">CN101.3 Data Communication and Networks</a></li>

		<li  style="width:450px"><a title="Click to enter this course" href="computing-subjects/introduction-to-computer-networks.php" target="_blank">CS101 Introduction to Computer Networks</a></li>

		<li  style="width:450px"><a title="Click to enter this course" href="computing-subjects/introduction-to-computer-science.php" target="_blank">CS101.3 Introduction to Computer Science</a></li>

		<li  style="width:450px"><a title="Click to enter this course" href="computing-subjects/programming-with-C-language.php" target="_blank">CS102.3 Programming with C Language</a></li>

		<li  style="width:450px"><a title="Click to enter this course" href="computing-subjects/programming-with-C-language-17.1.php" target="_blank">CS102.3 Programming with C Language 17.1</a></li>
		
		</ul>
		</center>
	</div>
	<div id="footer">
		<center><p>Copyright © All rights reserved</p></center>
	</div>
</div>
</body>
</html>
