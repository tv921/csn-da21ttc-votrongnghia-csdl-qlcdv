<?php
    $dbServerName = "localhost";
    $dbUserName = "root";
    $dbPassword  = "";
    $dbName = "qldv3";
    $conn =mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName );
    if (!$conn) {
	echo "Connection failed!";
    }
    echo "Connection successfully!"
 ?>