$(document).ready(function(){
	var get_bt = 0;
	$.ajax({
	        type: 'POST',
	        url: 'min.php',
	        data: { ok1: 'ok' },
	        success: function(data)
	        {
	            $('#bt').attr('min',data);
	            console.log(data);
	            get_bt = data;
	        }
	    });


	$('#data').click(function(){
		window.location.href = "taxidata.php";
	});

	$('#set').click(function(){
		$.ajax({
		        type: 'POST',
		        url: 'set.php',
		        data: { ok: 'ok' },
		        success: function(data)
		        {
		            console.log(data);
		        }
		    });
	});

	$('#alert').hide();
	var notaxi = $('#alert').html();
	if(notaxi){
		alert(notaxi);
	}


	$('#success').hide();
	var success = $('#success').html();
	if(success){
		alert(success);
	}

	$('#btn').click(function(e){
	  	e.preventDefault();
	  	var bt = $('#bt').val();
	  	var err = "Select Current time "+get_bt+" to 24";
	  	console.log("kjjk");

	  	if(bt == "")
	  	{
	  		var con1 = false;
	  		$('#err1').html(err);
	  	}else if(bt >= get_bt && bt <= 24){
	  		var con1 = true;
	  		$('#err1').html("");
	    }else{

	  		var con1 = false;
	  		$('#err1').html(err);
	  	}


	  	var dp = $('#dp').val();
	  	if(dp){
	  		var pp = $('#pp').val();
	  		if(pp == dp){
	  			var con2 = false;
	  			$('#err2').html('You Picked Your current loaction, pick anything else');
	  		}else{
	  			$('#err2').html("");
	  			var con2 = true;
	  		}
	  		
	  	}else{
	  		var con2 = false;
	  		$('#err2').html('Please pick one of them');
	  	}

	  	
	  	if(con1 && con2){
	  		$('#form').submit();
	  	}

  	});
});