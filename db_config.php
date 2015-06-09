<?php

        $my_host = "localhost";
        $my_user = "root";
        $my_password = "root";
        $my_database = "piseth_db";

	$mysqli = new mysqli($my_host, $my_user, $my_password, $my_database);

        if($mysqli->connect_error) {
		echo "Can't connect to MySql";
	}	
?>
