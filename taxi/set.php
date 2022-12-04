<?php
include("db_conn.php"); 
$entry = isset($_POST['ok']) ? true : false;

if($entry){
	
	$del1 = "DELETE FROM tab2";
	$del2 = "UPDATE tab1 SET B = 1, C = 0, D = 0";

	if($conn->query($del1) && $conn->query($del2)){
		echo "success";
	}
}

?>