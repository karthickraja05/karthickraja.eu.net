<?php

define("DB_SERVER", "192.168.43.229");
define("DB_USERNAME", "karthy");
define("DB_PASSWORD","2013107086");
define("DB_DATABASE","chat");
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE,3306);
if($db){
    echo "Connected";
}else{
	echo "No";
}


// 127.0.0.1
?>