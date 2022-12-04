<?php
function check($n,$t){
	include("db_conn.php"); 
	//$conn = mysqli_connect('127.0.0.1','root','Welcome01','taxi');
	$q = "SELECT * FROM tab1 WHERE B = $n";
	$row = $conn->query($q);
	$avail = [];
	while($test = $row->fetch_assoc()){
		if($test['D'] <= $t){
			$new = [$test['A'],$test['C'],$test['B']];
			array_push($avail, $new);
		}
	}	
	$min_earn = $avail[0];
	foreach ($avail as $key) {
		if($key[1] < $min_earn[1]){
			$min_earn = $key;
		}elseif($key[1] == $min_earn[1]){
			if($key[0] < $min_earn[0]){
				$min_earn = $key;
			}
		}
	}

	return $min_earn;
}


function compare($n1,$n2){
	$min_earn = $n1;
	if($n2[1] < $min_earn[1]){
		$min_earn = $n2;
	}elseif($n2[1] == $min_earn[1]){
		if($n2[0] < $min_earn[0]){
				$min_earn = $n2;
		}
	}

	return $min_earn;
}



function tab2($pp,$dp,$bt,$location){
	$lo_diff = abs($pp - $location);
	$pt = $bt + $lo_diff;
	$lo_drop = abs($pp - $dp);
	$dt = $pt + $lo_drop;
	$charge1 = (($lo_drop * 15) - 5) * 10;
	$charge = $charge1 + 100;
	$result = [$pt,$dt,$charge];
	return $result;
}

function insert_tab2($bt,$pt,$dt,$pp,$dp,$charge,$taxi){
	include("db_conn.php"); 
	//$conn = mysqli_connect('127.0.0.1','root','Welcome01','taxi');
	$q = "INSERT INTO tab2(bt,pt,dt,pp,dp,charge,taxi) VALUES ($bt,$pt,$dt,$pp,$dp,$charge,$taxi)";
	$conn->query($q);
}


function getEarn($taxi){
	include("db_conn.php"); 
	//$conn = mysqli_connect('127.0.0.1','root','Welcome01','taxi');
	$q = "SELECT * FROM tab2 WHERE taxi = $taxi";
	$row = $conn->query($q);
	$total = 0;
	while($test = $row->fetch_assoc()){
		$total += $test['charge'];
	}

	return $total;
}


function insert_tab1($taxi,$dp,$earn,$dt){
	include("db_conn.php"); 
	//$conn = mysqli_connect('127.0.0.1','root','Welcome01','taxi');
	$q = "UPDATE tab1 SET B = $dp, C = $earn, D = $dt WHERE A = $taxi";
	$conn->query($q);
	
}


?>