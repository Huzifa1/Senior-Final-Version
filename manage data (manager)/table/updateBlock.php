<?php 
		
		require_once "../../connection.php";
		$selectquery="SELECT block FROM block";
		$result1=mysqli_query($con, $selectquery);
		while($row = mysqli_fetch_assoc($result1)){
			$block = $row['block'];
			
			$selectquery="SELECT count(*) FROM cell where block = '$block'";
			$resultquery=mysqli_query($con, $selectquery);
			$row1 = mysqli_fetch_assoc($resultquery);
			$count = $row1['count(*)'];
			$selectquery="UPDATE block SET nb_of_cells = $count WHERE block = '$block'";
			$resultquery=mysqli_query($con, $selectquery);
		
			$selectquery="SELECT count(*) FROM staff where block = '$block'";
			$resultquery=mysqli_query($con, $selectquery);
			$row1 = mysqli_fetch_assoc($resultquery);
			$count = $row1['count(*)'];
			$selectquery="UPDATE block SET nb_of_staff = $count WHERE block = '$block'";
			$resultquery=mysqli_query($con, $selectquery);
			
			$selectquery="SELECT count(*) FROM prisoner where block = '$block'";
			$resultquery=mysqli_query($con, $selectquery);
			$row1 = mysqli_fetch_assoc($resultquery);
			$count = $row1['count(*)'];
			$selectquery="UPDATE block SET nb_of_prisoners = $count WHERE block = '$block'";
			$resultquery=mysqli_query($con, $selectquery);
			
		}
		
		
		
		
		
		
?>