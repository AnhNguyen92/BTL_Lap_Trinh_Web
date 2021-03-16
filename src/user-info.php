<?php require_once("config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<?php
$isLoggedin = isset($_SESSION['idLogin']) ? $_SESSION['idLogin'] : false;
$loggedinID = $isLoggedin ? $_SESSION['idLogin'] : "";
// if(isset($_POST['submit'])) {
//     $username = escape_string($_POST['username']);
//     $password = escape_string($_POST['password']);
if ($isLoggedin) {
    $query = query("SELECT * FROM users WHERE id = '$isLoggedin' ");
    confirm($query);

    $row = fetch_array($query);
    $userID = $row['id'];
    $userFirstName = $row['first_name'];
    $userLastName = $row['last_name'];
    $userBirthDay = $row['birthday'];
    $userName = $row['username'];
    $userPass = $row['password'];
}

?>


<div class="col-md-9 content-right">
    <div class="upper-content user-info">

        <div class="article-title">
            <div class="title-tiret"></div>
            <h1 class="main-title">THÔNG TIN CÁ NHÂN</h1>
        </div>
        
        <div class="login-form">
            <form class="" action="update-info.php" method="post">
                <div class="form-group"><label for="username"><span style="color: #ffffff; font-size: 19px;text-align: left;display: block;">First Name</span>
                        <input type="text" name="firstName" class="form-control" value="<?php echo $userFirstName ?>"></label>
                </div>

                <div class="form-group"><label for="password"><span style="color: #ffffff; font-size: 19px;text-align: left;display: block;">Last Name</span>
                        <input type="text" name="lastName" class="form-control" value="<?php echo $userLastName ?>"></label>
                </div>

                <div class="form-group"><label for="username"><span style="color: #ffffff; font-size: 19px;text-align: left;display: block;">Date of Birth</span>
                        <input type="date" name="birthDay" class="form-control" value="<?php echo $userBirthDay ?>"></label>
                </div>

                <div class="form-group"><label for="password"><span style="color: #ffffff; font-size: 19px;text-align: left;display: block;">User Name</span>
                        <input type="text" name="userName" class="form-control" value="<?php echo $userName ?>"></label>
                </div>

                <div class="form-group"><label for="password"><span style="color: #ffffff; font-size: 19px;text-align: left;display: block;">Password</span>
                        <input type="text" name="password" class="form-control" value="<?php echo $userPass ?>"></label>
                </div>

                <div class="form-group" style="text-align:center; margin-top: 40px;">
                    <button type="submit" name="submit" value="ĐĂNG NHẬP">CẬP NHẬT THÔNG TIN</button>
                </div>

            </form>
        </div>

    </div>

</div>
</div>
</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>