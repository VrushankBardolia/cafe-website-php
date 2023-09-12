<?php
include 'connection.php';
if($_REQUEST['id']){
	$id = $_REQUEST['id'];
	$sql ="DELETE FROM dishes WHERE d_id='$id'";
	$data = mysqli_query($cn,$sql);
	if ($data) {
		header('location:menu_list.php');
	}
	else{
		echo "error";
	}
}


?>