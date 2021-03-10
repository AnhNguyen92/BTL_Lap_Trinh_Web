<?php
require_once "conn.php";

if(count($_POST)> 0) {
    // add new
    if($_POST['type'] == 1) {
		$username = $_POST['username'];
        $lname = $_POST['last_name'];
		$fname = $_POST['first_name'];
        $birthday = $_POST['birthday'];
        $gender = $_POST['gender'];
        $status = $_POST['status'];
        $role = $_POST['role'];
        $sql = "INSERT INTO `users` 
            (`username`, `last_name`, `first_name`, `birthday`, `status`, `role`, `gender`) 
            VALUES ('$username','$lname', '$fname','$birthday','$status','$role', '$gender')";
        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode" => 200));
        } else {
            echo "Error: " . $sql . " " . mysqli_error($conn);
        }
	}

    // update
    else if($_POST['type'] == 2) {
		$id=$_POST['id'];
        $lname = $_POST['last_name'];
		$fname = $_POST['first_name'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
        $status = $_POST['status'];
        $role = $_POST['role'];

		$sql = "UPDATE `users` 
        SET `last_name` = '$lname', `first_name` = '$fname', `birthday` = '$birthday', `status` = '$status', `role` = '$role', `gender` = '$gender'  WHERE id = $id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode" => 200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

    // delete a row
    else if($_POST['type'] == 3) {
		$id=$_POST['id'];
		$sql = "DELETE FROM users WHERE id = $id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

    mysqli_close($conn);
}

?>