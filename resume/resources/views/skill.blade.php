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
	<form action="resume/public/skillupdate" method="post" enctype='multipart/form-data'>
		@csrf
		<table>
			<tr>
				<td>Update Skills:</td>
				<td><textarea name="about"></textarea></td>
				<td><span id="err_about"></span></td>
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

	  	var about = $('[name=about]').val();
	  	var blank_about = check1(about,'#err_about');


	  	

	  	if(blank_about){
	  		alert("Resume : Skill Section Updated");
	  		e.currentTarget.submit();	
	  	}	
	      
	      
	      
	  });

	  


	  


	});
</script>