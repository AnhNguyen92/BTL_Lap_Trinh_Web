<?php
	$username = "root";
    $password = "";
    $servername = "localhost:3306";
    $dbname = "company_intro";

    $conn = mysqli_connect($servername, $username, $password, $dbname) or die($link);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>