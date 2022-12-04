<!DOCTYPE html>
<html>
<head>
	<title>TAXI Details</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
	  <style type="text/css">
	  	th,td{
	  		text-align: center;
	  	}
	  	.pagination>li {
	  	display: inline;
	  	padding:0px !important;
	  	margin:0px !important;
	  	border:none !important;
	  	}
	  	.modal-backdrop {
	  	  z-index: -1 !important;
	  	}
	  	/*
	  	Fix to show in full screen demo
	  	*/
	  	iframe
	  	{
	  	    height:700px !important;
	  	}

	  	.btn {
	  	display: inline-block;
	  	padding: 6px 12px !important;
	  	margin-bottom: 0;
	  	font-size: 14px;
	  	font-weight: 400;
	  	line-height: 1.42857143;
	  	text-align: center;
	  	white-space: nowrap;
	  	vertical-align: middle;
	  	-ms-touch-action: manipulation;
	  	touch-action: manipulation;
	  	cursor: pointer;
	  	-webkit-user-select: none;
	  	-moz-user-select: none;
	  	-ms-user-select: none;
	  	user-select: none;
	  	background-image: none;
	  	border: 1px solid transparent;
	  	border-radius: 4px;
	  	}

	  	.btn-primary {
	  	color: #fff !important;
	  	background: #428bca !important;
	  	border-color: #357ebd !important;
	  	box-shadow:none !important;
	  	}
	  	.btn-danger {
	  	color: #fff !important;
	  	background: #d9534f !important;
	  	border-color: #d9534f !important;
	  	box-shadow:none !important;
	  	}
	  </style>
</head>
<body>
	<div class="container">
	<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">

		<thead>
			<th>Booking ID</th>
			<th>CutomerID</th>
			<th>Booking Time</th>
			<th>PickUp Time</th>
			<th>Drop Time</th>
			<th>PickUp Point</th>
			<th>Drop Point</th>
			<th>Charge</th>
			<th>Taxi</th>
		</thead>
		<tbody>
	<?php 
		$conv = [1=>'A',2=>'B',3=>'C',4=>'D',5=>'E',6=>'F'];
		include('db_conn.php');
		$q = "SELECT * FROM tab2";
		$html = "";
		$count = 1;
		if($row = $conn->query($q)){
			while($test = $row->fetch_assoc()){
				$pp = $conv[$test['pp']];
				$dp = $conv[$test['dp']];
				$html .= "<tr><td>".$count."</td><td>".$test['cid']."</td><td>".$test['bt']."</td><td>".$test['pt']."</td><td>".$test['dt']."</td><td>".$pp."</td><td>".$dp."</td><td>".$test['charge']."</td><td>T".$test['taxi']."</td></tr>";
				$count++;
			}
			echo $html;
		}

	?>
	</tbody>
	</table>
	</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
	    $('#datatable').dataTable();
	    
	     $("[data-toggle=tooltip]").tooltip();
	    
	} );
</script>