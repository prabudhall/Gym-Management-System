<?php
require('db.php');


$inf=$_GET['id'];


$sql_mem="DELETE FROM gym WHERE gym_id=(select gym_id from gym where gym_id='$inf')";
$sql_query_mem=mysqli_query($conn,$sql_mem);
if ($sql_query_mem) {


	$sql_query="DELETE FROM gym WHERE gym_id='$inf'";
	$delete=mysqli_query($conn,$sql_query);
	if ($delete) {
		header("location:home.php?info=manage_gym");
	}else{
		echo "error".mysqli_error($conn);
	}
	
	
}else{
	echo "Not deleted";
}
	
	

?>