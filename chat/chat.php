<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Chat with Friends</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    span{
      color: red;
    }
  </style>
</head>
<?php 
$user = isset($_SESSION['user']) ? $_SESSION['user'] : "Not Able to use";
$room = isset($_SESSION['room']) ? $_SESSION['room'] : "Not Able to use";
if($user == "Not Able to use" && $room == "Not Able to use"){
  
  header("Location: index.php");
  exit();
}


?>
<body>
  <div id='bodybox'>
    <p style="text-align: center;"><b>Last 10 msg only you can see</b></p>
    <p style="text-align: right;"><a href="logout.php"><button type="button" id="exit" class="btn btn-danger">EXIT</button></a></p>
    <p style="text-align: center; font-weight: bold;"><span>Room Name: </span><?php echo $room; ?><br> <span>User: </span><?php echo $user; ?></p>
    <div id='chatborder' style="height: 50vh;">

    </div>
    <p><input type="text" name="chat" id="chatbox" placeholder="Hi there! Type here to talk to friends." onfocus="placeHolder()"></p>
    <p style="text-align: center;"><button id="btn" type="button" class="btn btn-primary">SENT</button></p>

  </div>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#chatbox').keyup(function(e){
      if(e.keyCode == 13)
      {
      $("#btn").click();        
      }
    });


    $("#btn").click(function(){
      var val = $("#chatbox").val();
      var val = val.trim();
      if(val.length != 0){
        $("#chatbox").val('');
        $.ajax({
          type: "POST",
          url: "chatupdate.php",
          data: {
            room:<?php echo $_SESSION['room_id']; ?>,
            user:<?php echo $_SESSION['user_id']; ?>,
            data: val 
          },
          cache: false,
          success: function(data){
          }
        });
      }else{
        alert("please enter something");
      }
      

    });

    function getmsg(room){
      $.ajax({
        type: "POST",
        url: "getdata.php",
        data: {room:room},
        cache: false,
        success: function(data){
          var l = data.length;
          var t = false;
          var new_val = '';
          var c = 0;
          var new_data = [];
          var f = false;
          for (var i = 0; i < l; i++) {
            if(data[i] == '"'){
              t = true;
              c++;
            }

            if(t){
              if(c == 1){
                if(f){
                  new_val += data[i];   
                }else{
                  f = true;
                }
                
              }else if(c == 2){
                c = 0;
                new_data.push(new_val);
                new_val = '';
                t = false;
                f = false;
              }
            }
          }
          var inser = "";
          var sen = "";
          var x = 0;
          for (var i = 0; i < 20; i++) {
            if(new_data[i]){
              if(x == 0){
                sen += "<p><b>"+new_data[i]+": </b>";
                x++;
              }else{
                inser = sen + new_data[i]+"</p>" + inser;
                sen = "";
                x = 0;
              }
              
            }
            
          }
          $("#chatborder").html(inser);
        }
      });
      setTimeout(function(){
        getmsg(<?php echo $_SESSION['room_id']; ?>)
      },500);
    }

    setTimeout(function(){
        getmsg(<?php echo $_SESSION['room_id']; ?>)
      },500);




  });
</script>