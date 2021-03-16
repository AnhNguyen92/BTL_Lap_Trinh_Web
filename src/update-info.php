
<?php
require_once("config.php");
require_once("functions.php");
$isLoggedin = isset($_SESSION['idLogin']) ? $_SESSION['idLogin'] : false;
$loggedinID = $isLoggedin ? $_SESSION['idLogin'] : "";


if (isset($_POST['submit'])) {
    if ($isLoggedin) {
        $userFirstName = escape_string($_POST['firstName']);
        $userLastName = escape_string($_POST['lastName']);
        $userBirthDay = escape_string($_POST['birthDay']);
        $userName = escape_string($_POST['userName']);
        $userPass = escape_string($_POST['password']);
        $query = query("UPDATE users SET username = '$userName', password = '$userPass', first_name = '$userFirstName', last_name = '$userLastName', birthday = '$userBirthDay' WHERE id = '$isLoggedin'");
        confirm($query);
    }

    // if($isLoggedin) {
    // $query = query("UPDATE users SET username = '$userName', password = '$userPass', first_name = '$userFirstName', last_name = '$userLastName', birthday = '$userBirthDay' WHERE id = '$isLoggedin'");
    // confirm($query); }
}

redirect('index.php');

?>