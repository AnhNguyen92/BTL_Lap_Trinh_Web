<?php
	$username = "root";
    $password = "";
    $servername = "localhost:3306";
    $dbname = "company_intro";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>