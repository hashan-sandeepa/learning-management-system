<!DOCTYPE html>
<?php
   include('../session.php');

   $msg="";
   
   if(isset($_FILES['file'])){
      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];

      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../../uploads/".$file_name);
         $sql = "INSERT INTO file Values(null,'$file_name',1,2,null)";
         if(mysqli_query($db,$sql) === TRUE){
            $msg="File has been uploaded";
         }
      }else{
         $msg=$errors;
      }
   }
?>
<html>
<head>
	<title>LMS - Home</title>
	<link href="../../css/home.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
</head>
<body style="width:1000px;margin-left:auto;margin-right:auto;" background="../../image/background-photo.jpg">
<div id="main">
	<div id="header">
		<div>
         <p id="title">LMS - School of Business</p>
			<a href = "../logout.php" id="logout">Sign Out</a>
			<p id="username">Logged as <?php echo $user_check ?>  | <p> 
		</div>
	</div>
	<p id="subtitle">Computer Science Fundamentals</p>
	<div id="slider">
		<img src="../../image/banner.jpg" width="100%" height="350px">
	</div>
	<center>
	<div id="container"style="height:auto;width:500px;min-height:300px;">
   		<p id="recentTitle" style="width: 96%">Topic Outline</p>
            <?php
               $user_check = $_SESSION['login_user'];

               $ses_sql = mysqli_query($db,"select role from login where username = '$user_check' ");

               $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

               $role = $row['role'];
               if ($role==="Admin") {
                  echo '
                  <div id="uploadBox">
                     <form action="" method="post" enctype="multipart/form-data">
                        <input type="file" id="uploadFile" name="file">
                        <input type="submit" value="Upload" name="submit">
                     </form>
                     <center><div style = "font-size:15px; color:rgb(50, 158, 104);margin-top:5px;">'.$msg.'</div></center>
                  </div>
                  ';
               }
            ?>
            <div id="filesDiv" style="height: auto;min-height:300px;">
            <?php
               $dir = '../../uploads/';
               $files = scandir($dir,1);

               $files = array_diff($files, array('.', '..'));

               $q = "SELECT filename FROM file WHERE course=1 AND subject=2 ORDER BY datetime desc";
               if ($result = $db->query($q)) {
               		$rowcount=mysqli_num_rows($result);
               		$i=1;
                  while ($row = $result->fetch_assoc()) {
                     foreach ($files as &$file) {
                        if ($row['filename']===$file) {
                           echo '<p style="font-size:18px;float: left;max-width: 100%">'.$file.'</p><br><br><br>
                           <a class="links" href="../../uploads/'.$file.'" target="_blank">VIEW</a>
                           <a class="links" href="../../uploads/'.$file.'" download>DOWNLOAD</a>';

                           if ($role==="Admin") {
                              echo '<a class="links" href="../../php/deleteFile.php?file='.$file.'
				&target=business-subjects/computer-science-fundamentals.php">DELETE</a>';
                           }

                           echo '<br>';
                           if($i!=$rowcount){
                           	echo '<hr>';
                           }else{
                           	echo '<br>';
                           }
                        }
                     }
                     $i+=1;
                     
                  }
               }
            ?>
           </div>
	</div>
	</center>
	<div id="footer">
		<center><p>Copyright © All rights reserved</p></center>
	</div>
</div>
</body>
</html>
