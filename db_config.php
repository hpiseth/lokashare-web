<?php

        $my_host = "localhost";
        $my_user = "root";
        $my_password = "root";
        $my_database = "piseth_db";

        $db = mysql_connect($my_host, $my_user, $my_password) or die("Can't connect to mysql");
        mysql_select_db($my_database, $db) or die("Can't connect to database");
	
?>
