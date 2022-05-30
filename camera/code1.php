<?php 
	
	if($_SESSION['isloggedin'] == 1){
		echo '<h5 class=" me-auto" style="color:white;">Welcome '.$_SESSION['username'] .'</h5>';

	}
	else{
		header("location:../login/index.php");
	}
	
?>