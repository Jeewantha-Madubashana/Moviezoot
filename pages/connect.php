<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moviezoot";

$con = mysqli_connect($servername,$username,$password);

if (!$con) {
    die("Connection failed: " 
	. mysqli_connect_error());
}

mysqli_select_db($con, $dbname);
?>
