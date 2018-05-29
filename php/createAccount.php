<?php
   include("dbConfig.php");
   $msg="";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   
      $myusername = mysqli_real_escape_string($db,$_POST['userName']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

      $searchSql = "SELECT id FROM login WHERE username = '$myusername'";
      $result = mysqli_query($db,$searchSql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername table row must be 1 row
      
      if($count != 1) {
      	$sql = "INSERT INTO login Values(null,'$myusername','$mypassword','Student')";
	    if(mysqli_query($db,$sql) === TRUE){
	     	$msg="Your account has been created successfully";
	    }else{
	     	$msg="Your Account creation failed";
	    }
      }else{
      	$msg="Username is already exist";
      }
   }
?>
<html>
<head>
	<title>LMS - Login</title>
	<link href="../css/login.css" rel="stylesheet" type="text/css">
	<link href="../css/account.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="main">
	<p id="lbl">LMS Account</p>
        <form action="" method="post">
            <center>
                <input id="userName" class="field" name="userName" type="text" placeholder="Username" autofocus/> <br>
				<input id="password" class="field" name="password" type="password" placeholder="Password"/> <br><br>
				<input id="submit" type="submit" value = "Create"/>
				<div style = "font-size:15px; color:white; margin-top:30px"><?php echo $msg; ?></div>
				<a href = "../login.html" id="login"> Back </a>
            </center>

        </form>
		
    </div>
</body>
</html>