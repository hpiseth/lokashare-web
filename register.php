<?php

include("db_config.php");

// JSON Response status
$response = array();

if( !(empty($_POST['username']))){

	$username =$_POST['username'];
		
	$current_time = date('Y/m/d H:i:s');
	$insert_query = sprintf("INSERT INTO users(name, last_update) VALUES('%s','%s')", 
		mysql_real_escape_string($username),$current_time);
	$result = mysql_query($insert_query);

	if($result>0){
		 $response["success"] = 1;
	} else{
		$response["success"] = 0;
	}
	// print JSON response
	echo json_encode($response);
}

?>
