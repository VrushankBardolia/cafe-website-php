<?php
include 'connection.php';
if($_REQUEST['id']){
	$id = $_REQUEST['id'];
	$sql ="DELETE FROM reservation WHERE r_id='$id'";
	$data = mysqli_query($cn,$sql);
	if ($data) {
		header('location:display_reservation.php');
	}
	else{
		echo "error";
	}
}
?>