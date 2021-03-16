<?php
require_once "conn.php";

if(count($_POST)> 0) {
    // add new user
    if($_POST['type'] == 1) {
		$username = $_POST['username'];
        $password = $_POST['password'];
        $lname = $_POST['last_name'];
		$fname = $_POST['first_name'];
        $birthday = $_POST['birthday'];
        $gender = $_POST['gender'];
        $status = $_POST['status'];
        $role = $_POST['role'];
        $sql = "INSERT INTO `users` 
            (`username`, `password`, `last_name`, `first_name`, `birthday`, `status`, `role`, `gender`) 
            VALUES ('$username', '$password', '$lname', '$fname','$birthday','$status','$role', '$gender')";
        if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode" => 200));
        } else {
            echo "Error: " . $sql . " " . mysqli_error($conn);
        }
	}

    // update user
    else if($_POST['type'] == 2) {
		$id=$_POST['id'];
        $password = $_POST['password'];
        $lname = $_POST['last_name'];
		$fname = $_POST['first_name'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
        $status = $_POST['status'];
        $role = $_POST['role'];

		$sql = "UPDATE `users` 
        SET `password` = '$password', `last_name` = '$lname', `first_name` = '$fname', `birthday` = '$birthday', `status` = '$status', `role` = '$role', `gender` = '$gender'  WHERE id = $id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode" => 200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

    // delete a user
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

    // update index
    else if($_POST['type'] == 4) {
        $wwap1 = $_POST["whoWweAreP1"];
        $wwap2 = $_POST["whoWweAreP2"];
        $wwap3 = $_POST["whoWweAreP3"];
        $wwap4 = $_POST["whoWweAreP4"];
        $ourService = $_POST["ourService"];
        $pricing = $_POST["pricing"];
        $contactUs = $_POST["contactUs"];
        $sql = "Update `index_page` set `who_we_are_p1`='" . $wwap1 . "', `who_we_are_p2`='" . $wwap2 
        . "', `who_we_are_p3`='" . $wwap3 . "', `who_we_are_p4`='" . $wwap4 . "', `our_service`='" 
        . $ourService . "', `pricing`='" . $pricing . "', `contact_us`='" . $contactUs . "' where id=1";
		
		if (mysqli_query($conn, $sql)) {
            echo json_encode(array("statusCode" => 200));
        } else {
            echo "Error: " . $sql . " " . mysqli_error($conn);
        }
	}

    mysqli_close($conn);
}

?>