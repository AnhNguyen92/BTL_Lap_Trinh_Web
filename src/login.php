<?php require_once("config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header-login-signup.php") ?>

<?php
if (isset($_POST['submit'])) {
    $username = escape_string($_POST['username']);
    $password = escape_string($_POST['password']);

    $query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' AND status = 'active'");
    confirm($query);

    if (mysqli_num_rows($query) == 0) {
        $message = set_message("Your password or Username are wrong");
        redirect("login.php");
    } else {
        $row = fetch_array($query);
        $userID = $row['id'];
        $userRole = $row['role'];
        $_SESSION["idLogin"] = $userID;
        $_SESSION["username"] = $row['username'];
        redirect("index.php");
    }
}
?>


<div class="col-md-9 content-right">
    <div class="upper-content login-content">

        <div class="article-title">
            <div class="title-tiret"></div>
            <h1 class="main-title">ĐĂNG NHẬP</h1>
        </div>

        <div class="login-form">
            <form class="" action="" method="post">
                <div class="form-group"><label for="username">
                        <input type="text" name="username" class="form-control" placeholder="Tên đăng nhập"></label>
                </div>

                <div class="form-group"><label for="password">
                        <input type="password" name="password" class="form-control" placeholder="Mật khẩu"></label>
                </div>

                <div class="form-group" style="text-align:center; margin-top: 40px;">
                    <button type="submit" name="submit" value="ĐĂNG NHẬP">ĐĂNG NHẬP</button>
                </div>

                <p>Bạn chưa có tài khoản ? <a href="signup.php" class="sign-up-2">Đăng ký</a> </p>
            </form>
        </div>

    </div>

</div>
</div>
</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>