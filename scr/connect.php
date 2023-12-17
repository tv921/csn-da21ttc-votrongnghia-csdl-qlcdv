<?php
    $dbServerName = "localhost";
    $dbUserName = "root";
    $dbPassword  = "";
    $dbName = "qldv";
    $conn =mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName );
    if (!$conn) {
	echo "Connection failed!";
}
 ?>