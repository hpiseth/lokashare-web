<?php

include("db_config.php");
 
// JSON Response status
$response = array();

if( !(empty($_POST['username']))){

	$username =$mysqli->real_escape_string($_POST['username']);

	// Check user duplication
	$select_user_query = sprintf("SELECT * from users where name = '%s'",
		$username);
	$count = $mysqli->query($select_user_query);

	if ($count->num_rows > 0) {
		$response["success"] = 2;
	} else {
		$current_time = date('Y/m/d H:i:s');
		$insert_query = sprintf("INSERT INTO users(name, last_update) VALUES('%s','%s')",$username ,$current_time);
		$mysqli->query($insert_query);

		if($mysqli->affected_rows > 0){
			$response["success"] = 1;
		} else{
			$response["success"] = 0;
		}
	}
	$mysqli->close();

	// print JSON response
	echo json_encode($response);
}

?>
