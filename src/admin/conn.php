<?php
	//Kết nối
	$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die('Not connected DB!');
	if(!$conn){
		die("Error: Không kết nối được tới cơ sở dữ liệu!");
	}
?>