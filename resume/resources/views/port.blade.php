<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style type="text/css">
		td span{
			color: red;
		}
	</style>
</head>
<body>
	<form action="resume/public/portupdate" method="post" enctype='multipart/form-data'>
		@csrf
		<table>
			<tr>
				<td>Project Name:</td>
				<td><textarea name="name"></textarea></td>
				<td><span id="err_name"></span></td>
			</tr>
			<tr>
				<td>Field:</td>
				<td><textarea name="field"></textarea></td>
				<td><span id="err_field"></span></td>
			</tr>
			<tr>
				<td>Project Link:</td>
				<td><textarea name="link"></textarea></td>
				<td><span id="err_link"></span></td>
			</tr>
			<tr>
				<td>BackGround Image:</td>
				<td><input type="file" name="img"></td>
				<td><span id="err_img"></span></td>
			</tr>
			<tr>
				<td colspan="3"><button id="btn">Submit</button></td>
			</tr>
			</table>
	</form>
		
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){


	  
	  $('form').submit(function(e){
	  	e.preventDefault();

	  	function check(a,b){
	  		var name_len = a.length;
	  		if(name_len == 0){
	  			$(b).html('This Field is required');
	  			return false;
	  		}else if(name_len < 5 || name_len > 30){
	  			$(b).html('Char between 5 to 30');
	  			return false;
	  		}else{
	  			$(b).html('');
	  			return true;
	  		}
	  	}

	  	function check1(a,b){
	  		var name_len = a.length;
	  		if(name_len == 0){
	  			$(b).html('This Field is required');
	  			return false;
	  		}else{
	  			$(b).html('');
	  			return true;
	  		}
	  	}

	  	var name = $('[name=name]').val();
	  	var blank_name = check(name,'#err_name');


	  	var field = $('[name=field]').val();
	  	var blank_field = check(field,'#err_field');

	  	var link = $('[name=link]').val();
	  	var blank_link = check1(link,'#err_link');

	  	var img = $('[name=img]').val();
	  	if(img){
	  		var blank_img = true;
	  	}else{
	  		var blank_img = false;
	  	}
	  	

	  	if(blank_name && blank_link && blank_field && blank_img){
	  		alert("Resume : Portfolio Section Updated");
	  		e.currentTarget.submit();	
	  	}	
	      
	      
	      
	  });

	  


	  


	});
</script>