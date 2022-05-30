<?php 
	require_once "../connection.php";
	if(isset($_GET['id']) && isset($_GET['status']) && isset($_GET['email']) && isset($_GET['name']) && isset($_GET['date'])){
		$query='UPDATE visitor SET request_status="'.$_GET['status'].'" where visit_id='.$_GET['id'];
		$result=mysqli_query($con, $query);
		$m = '';
		if($_GET['status'] == 'accepted'){
			$m = 'This email is to inform you that your request has been approved. You can visit '.$_GET['name'].' in '.$_GET['date'].' at 02:00 PM';
		}
		else{
			$m = 'We are sorry to inform you that your request to visit '.$_GET['name'].' has been rejected.';
		}
		require_once "sendemail.php";
		header("location:index.php");
	}
	
	if(isset($_GET['prisoner_id']) && isset($_GET['type']) && isset($_GET['status'])){
		$query='UPDATE request SET status="'.$_GET['status'].'" where prisoner_id='.$_GET['prisoner_id'].' and type = "'.$_GET['type'].'"';
		$result=mysqli_query($con, $query);
		header("location:index.php");
	}
?>