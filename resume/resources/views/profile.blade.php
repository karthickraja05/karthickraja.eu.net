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
	<form action="{{ route('update') }}" method="post" enctype='multipart/form-data'>
		@csrf
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name"></td>
				<td><span id="err_name"></span></td>
			</tr>
			<tr>
				<td>Job Title:</td>
				<td><input type="text" name="job"></td>
				<td><span id="err_job"></span></td>
			</tr>
			<tr>
				<td>Facebook:</td>
				<td><input type="text" name="fb"></td>
				<td><span id="err_fb"></span></td>
			</tr>
			<tr>
				<td>Linked in:</td>
				<td><input type="text" name="link"></td>
				<td><span id="err_link"></span></td>
			</tr>
			<tr>
				<td>About:</td>
				<td><textarea name="about"></textarea></td>
				<td><span id="err_about"></span></td>
			</tr>
			<tr>
				<td>Age:</td>
				<td><input type="number" name="age"></td>
				<td><span id="err_age"></span></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email"></td>
				<td><span id="err_email"></span></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><textarea name="address"></textarea></td>
				<td><span id="err_add"></span></td>
			</tr>
			<tr>
				<td>Language:</td>
				<td><input type="text" name="lang"></td>
				<td><span id="err_lang"></span></td>
			</tr>
			<tr>
				<td>PhoneNumber:</td>
				<td><input type="text" name="ph"></td>
				<td><span id="err_ph"></span></td>
			</tr>
			<tr>
				<td>Upload Image:</td>
				<td><input type="file" name="file"></td>
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


	  	var job = $('[name=job]').val();
	  	var blank_job = check1(job,'#err_job');

	  	var fb = $('[name=fb]').val();
	  	var blank_fb = check1(fb,'#err_fb');

	  	var link = $('[name=link]').val();
	  	var blank_link = check1(link,'#err_link');

	  	var about = $('[name=about]').val();
	  	var blank_about = check1(about,'#err_about');


	  	var file = $('[name=file]').val();
	  	var blank_file = check1(file,'#err_img');

	  	var ph = $('[name=ph]').val();
	  	if(ph.length >= 10 && ph.length <= 13){
	  		$('#err_ph').html('');
	  		var blank_ph = true;	
	  	}else{
	  		$('#err_ph').html('Plese Enter correct mobile number');
	  		var blank_ph = false;
	  	}
	  	

	  	var age = $('[name=age]').val();
	  	if(!age){
	  		$("#err_age").html('This Field is required');
	  		var blank_age = false;
	  	}else if(age < 18 || age > 60){
	  		$("#err_age").html('Please enter 18 to 60');
	  		var blank_age = false;
	  	}else{
	  		$("#err_age").html('');
	  		var blank_age = true;
	  	}

	  	var email = $('[name=email]').val();
	  	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	  	var final_email = regex.test(email);

	  	if(!email){
	  		$("#err_email").html('This Field is required');
	  	}else{
	  		if (final_email){
	  			$("#err_email").html('');
	  			var blank_email = true;
	  		}else{
	  			$("#err_email").html('Invalid Email');
	  			var blank_email = false;
	  		}	
	  	}

	  	

	  	var address = $('[name=address]').val();
	  	var blank_address = check1(address,'#err_add');

	  	var lang = $('[name=lang]').val();
	  	var blank_lang = check(lang,'#err_lang');
	  	

	  	if(blank_name && blank_job && blank_fb && blank_link && blank_about && blank_age && blank_email && blank_address && blank_lang && blank_ph && blank_file){
	  		alert("Resume : Profile Section Updated");
	  		e.currentTarget.submit();	
	  	}	
	      
	      
	      
	  });

	  


	  


	});
</script>