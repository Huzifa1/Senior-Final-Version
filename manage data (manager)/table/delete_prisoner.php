<?php

	require_once "../../connection.php";
    $id = 0;
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    $selectquery="DELETE FROM prisoner WHERE prisoner_id = '$id'";
    $result=mysqli_query($con, $selectquery);
	require_once "updateCell.php";
	require_once "updateBlock.php";
	header("location:tablePrisoner.php");
    ?>