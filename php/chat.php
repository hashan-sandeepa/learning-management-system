<?php
   include("dbConfig.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $username = $_SESSION['login_user'];

      $msg = mysqli_real_escape_string($db,$_POST['msg']);

      $sql = "INSERT INTO message Values(null,'$msg','$username')";
       if(mysqli_query($db,$sql) === TRUE){
         header("location:home.php");
       }
   }
?>