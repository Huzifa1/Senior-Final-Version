<?php

	require_once "../../connection.php";
    $id = 0;
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    $selectquery="DELETE FROM admin WHERE admin_id = '$id'";
    $result=mysqli_query($con, $selectquery);
	require_once "updateBlock.php";
	header("location:tableAdmin.php");
    ?>