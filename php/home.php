<!DOCTYPE html>
<?php
   include('session.php');

   $chat=array();

   $q = "SELECT id,userName,text FROM message";
   if ($result = $db->query($q)) {
   while ($row = $result->fetch_assoc()) {
      $chat[] = $row['userName']. " : ".$row['text'];
   }}
?>
<html>
<head>
	<title>LMS - Home</title>
	<link href="../css/home.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<link href='../css/slider.css' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/calendarview.css">
	<style>
      div.calendar {
        max-width: 400px;
        margin-left: auto;
        margin-right: auto;
	       margin-top:20px;
      }

      table{
        width: 282px;
        height: 220px;
      }
    </style>
</head>
<body style="margin:0px;" background="../image/background-photo.jpg">
<div id="main" style="width:1000px;margin-left:auto;margin-right:auto;">
	<div id="header">
		<div>
         <p id="title">Learning Management System</p>
			<a href = "logout.php" id="logout">Sign Out</a>
			<p id="username">Logged as <?php echo $user_check ?>  | <p>
		</div>
	</div>
	<div id="slider">
		<div class="slideshow-container">
			<div class="mySlides fade">
			  <div class="numbertext">1 / 3</div>
			  <img src="../image/slide-1.png" style="width:100%" height="350px">
			  <div class="text">Caption Text</div>
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">2 / 3</div>
			  <img src="../image/slide-2.png" style="width:100%" height="350px">
			  <div class="text">Caption Two</div>
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">3 / 3</div>
			  <img src="../image/slide-3.png" style="width:100%" height="350px">
			  <div class="text">Caption Three</div>
			</div>
		</div>
	</div>
	<div id="container">
   		<div id="left">
   			<p id="chatTitle">QUESTIONS</p>
            <textarea readonly="readonly"><?php echo implode("\n", $chat);?></textarea>
            <form action="chat.php" method="post">
            <input type="text" id="msgTxt" name="msg"><input type="submit" id="sendBtn" value="Send">
            </form>
			<div style="float: left">
			  <div style="-webkit-border-radius: 12px; -moz-border-radius: 12px;">
				<div id="embeddedExample" style="">
				  <div id="embeddedCalendar" style="margin-left: auto; margin-right: auto">
				  </div>
				</div>
			  </div>
			</div>

   		</div>
		<div id="center">
            <div style="font-size: 20px">
               <ul style="width:300px;margin-left:-10px;margin-top:100px;">
               <li><a href="business.php" class="link" target="_blank">School of Business</a></li>
               <li><a href="computing.php" class="link" target="_blank">School of Computing</a></li>
               <li><a href="engineering.php" class="link" target="_blank">School of Engineering</a></li>
               </ul>
            </div>
   		</div>
   		<div id="right">
   			<p id="recentTitle">Recent Files</p>
            <?php
               $user_check = $_SESSION['login_user'];

               $ses_sql = mysqli_query($db,"select role from login where username = '$user_check' ");

               $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

               $role = $row['role'];
            ?>
            <div id="filesDiv">
            <?php
               $dir = '../uploads/';
               $files = scandir($dir,1);

               $files = array_diff($files, array('.', '..'));

               $q = "SELECT filename FROM file ORDER BY datetime desc LIMIT 5";
               if ($result = $db->query($q)) {
                  $i=1;
                  while ($row = $result->fetch_assoc()) {
                     foreach ($files as &$file) {
                        if ($row['filename']===$file) {
                           echo '<p style="font-size:18px">'.$file.'</p><a class="links" href="../uploads/'.$file.'" target="_blank">VIEW</a>
                           <a class="links" href="../uploads/'.$file.'" download>DOWNLOAD</a>';

                           if ($role==="Admin") {
                              echo '<a class="links" href="../php/deleteFile.php?file='.$file.'
				&target=home.php">DELETE</a>';
                           }

                           echo '<br>';

                           if ($i!=5) {
                             echo '<hr>';
                           }
                        }
                     }
                     $i=$i+1;
                  }
               }
            ?>
           </div>

   		</div>
	</div>
	<div id="footer">
		<center><p>Copyright © All rights reserved</p></center>
	</div>
</div>
<script src=../js/slider.js"></script>
<script src="../js/prototype.js"></script>
<script src="../js/calendarview.js"></script>
<script>
      function setupCalendars() {
        // Embedded Calendar
        Calendar.setup(
          {
            dateField: 'embeddedDateField',
            parentElement: 'embeddedCalendar'
          }
        )

        // Popup Calendar
        Calendar.setup(
          {
            dateField: 'popupDateField',
            triggerElement: 'popupDateField'
          }
        )
      }

      Event.observe(window, 'load', function() { setupCalendars() })
</script>
<script type="text/javascript">
	var slideIndex = 1;
	showSlides(	);

	function showSlides() {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none"; 
		}
		slideIndex++;
		if (slideIndex> slides.length) {slideIndex = 1} 
		slides[slideIndex-1].style.display = "block"; 
		setTimeout(showSlides, 2000); // Change image every 2 seconds
	}
</script>
</body>
</html>
