
<?php
include 'conn.php';
session_start();
$message = $username = $password = "";
if (count($_POST) > 0) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM users WHERE username='" . $username . "' and password = '" . $password . "'";
    $result = $conn->query($sql);
    $row  = mysqli_fetch_array($result);
    if (is_array($row) && $row['status'] == 'active' && $row['role'] == 'admin') {
        $_SESSION["id"] = $row['id'];
        $_SESSION["username"] = $row['username'];
    } else {
        $message = "Tên đăng nhập hoặc mật khẩu không đúng!";
    }
}
if (isset($_SESSION["id"])) {
    header("Location:users.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Admin - Bài tập lớn Lập trình Web - 2020-2021</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="../css/style-admin.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/449b38c131.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container-fluid p-0">

        <header class="login-header px-3">Company Introduction Admin</header>
        <div>
            <div class="text-center my-5"><h3>ĐĂNG NHẬP HỆ THỐNG</h3></div>
            
            <form class="login-form justify-content-center" name="frmUser" method="post" action="">
                <div class="form-group row justify-content-left">
                    <div class="text-danger"><?php echo $message; ?></div>
                </div>
                <div class="form-group row">
                    <div class="mr-2 my-auto"><i class="fa fa-user" aria-hidden="true"></i></div>    
                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Tài khoản đăng nhập">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="mr-2 my-auto"><i class="fa fa-lock" aria-hidden="true"></i></div>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Mật khẩu">
                    </div>
                </div>
                <div class="text-cennter mx-auto">
                    <input class="btn btn-md btl-login" type="submit" value="ĐĂNG NHẬP">
                </div>
            </form>
        </div>
        <footer class="login-footer footer bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright © BTL Lập Trình Web 2021</div>
                    <div>
                        <a href="#">Chính sách bảo mật</a>
                        &middot;
                        <a href="#">Điều khoản &amp; Điều kiện</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <?php
        $conn->close();
    ?>
</body>

</html>