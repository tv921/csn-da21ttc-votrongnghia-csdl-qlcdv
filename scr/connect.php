<?php
    $dbServerName = "localhost";
    $dbUserName = "root";
    $dbPassword  = "";
    $dbName = "db2";
    $conn =mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName );
    if (!$conn) {
	echo "Connection failed!";
    }
 ?>