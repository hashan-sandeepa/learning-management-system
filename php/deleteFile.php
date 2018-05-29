<?php
	include('dbConfig.php');
	$file=$_GET['file'];
	$target=$_GET['target'];

	$sql = "DELETE FROM file WHERE filename='$file'";
	if(mysqli_query($db,$sql) === TRUE){
		echo "1";
	    $path = '../uploads/'.$file.'';
		unlink($path);
	    header('location:'.$target);
	}
	
?>