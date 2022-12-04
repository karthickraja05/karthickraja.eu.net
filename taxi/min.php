<?php 
include("db_conn.php"); 
$entry = isset($_POST['ok1']) ? true : false;

if($entry){
	$q = "SELECT * FROM tab2";
	$row = $conn->query($q);
	$new = [];
	while($test = $row->fetch_assoc()){
		array_push($new, $test['bt']);
	}
	if($new){
		$max = $new[0];
		foreach ($new as $key){
			if($key > $max){
				$max = $key;
			}
		}
		echo $max;	
	}else{
		echo 0;
	}
	
}
?>