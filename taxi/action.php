<?php 
include('fun.php');

/*$n1 = [1,200];
$n2 = [3,100];

print_r(compare($n1,$n2));
*/

$bt = $_POST['bt'];
$pp1 = $_POST['pp'];
$dp1 = $_POST['dp'];

$point = ['A'=>1,'B'=>2,'C'=>3,'D'=>4,'E'=>5,'F'=>6];

$pp = $point[$pp1];
$dp = $point[$dp1]; 


$store = check($pp,$bt);
//print_r($store);

//echo --$pp;
if($store){
	$output = $store;
}else{
	$notaxi = false;
	$output = [];
	$exit1 = false;
	$exit2 = false;
	$min_pp = $pp;
	$max_pp = $pp;
	while(true){
		$min_pp = $min_pp - 1;
		$max_pp = $max_pp + 1;

		if($min_pp == 0){
			$exit1 = true;
		}

		if($max_pp == 7){
			$exit2 = true;
		}

		if($exit1 && $exit2){
			$notaxi = true;
			break;
		}

		$val1 = check($min_pp,$bt);
		$val2 = check($max_pp,$bt);

		if($val1 && $val2){
			$output = compare($val1,$val2);
			break;
		}elseif($val1) {
			$output = $val1;
			break;
		}elseif($val2) {
			$output = $val2;
			break;
		}

		
	}
}



if($output){
	$taxi = $output[0];
	$location =  $output[2];

	//tab2(3,5,10,1)
	//tab2($pp,$dp,$bt,$taxi,$location);
	$result = tab2($pp,$dp,$bt,$location);

	$pt = $result[0];
	$dt = $result[1];
	$charge = $result[2];

	insert_tab2($bt,$pt,$dt,$pp,$dp,$charge,$taxi);
	//$earn = getEarn(4);
	//echo $earn;
	$earn = getEarn($taxi);
	//insert_tab1(2,3,400,9);
	insert_tab1($taxi,$dp,$earn,$dt);
	session_start();
	$_SESSION["pt"] = $pt;
	$_SESSION['taxi'] = $taxi;
	header("Location: index.php");
	exit();
}else{
	session_start();
	$_SESSION["result"] = "No Taxi Available, Book later, Sorry for inconvenience";
	header("Location: index.php");
	exit();
}


//print_r($output);











?>