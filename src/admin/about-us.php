<?php
include 'conn.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content1 = mysqli_real_escape_string($conn, $_POST["content_1"]);
    $content2 = mysqli_real_escape_string($conn, $_POST["content_2"]);
    $content3 = mysqli_real_escape_string($conn, $_POST["content_3"]);
    $youtubeLink = mysqli_real_escape_string($conn, $_POST["youtube_link"]);
    $sql = "Update `about_us` set `content_1`='" . $content1 . "',`content_2`='" . $content2
    . "', `content_3`='" . $content3 . "', `youtube_link`='" . $youtubeLink . "' where id=1";
    // mysqli_query($conn, $sql);
    if (!mysqli_query($conn, $sql)) {
        echo "Error updating record: " . mysqli_error($conn);
        echo "<script>console.log('Debug Objects: " . mysqli_error($conn) . "' );</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quản lý trang Về chúng tôi - Bài tập lớn Lập trình Web - 2020-2021</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <link href="../css/style-admin.css" rel="stylesheet" type="text/css">
</head>

<body class="sb-nav-fixed">
    <?php
        if (isset($_SESSION["username"])) {
    ?>
    <?php
        $sql = "select * from about_us where id=1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
    ?>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Company Introduction</a>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user fa-fw pr-2"></i><span class="text-white"><?php echo $_SESSION["username"]; ?></span></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Setting</a>
                    <a class="dropdown-item" href="#">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="users.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-user"></i></div>
                            Người dùng
                        </a>
                        <div class="sb-sidenav-menu-heading">Website</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-home"></i></div>
                            Trang chủ
                        </a>
                        <a class="nav-link" style="color:#fff;" href="about-us.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Về chúng tôi
                        </a>
                        <a class="nav-link" href="service-info.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            Thông tin dịch vụ
                        </a>
                        <a class="nav-link" href="process-paving.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            Quy trình lát gạch
                        </a>
                        <a class="nav-link" href="pricing.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Bảng giá
                        </a>
                        <a class="nav-link" href="contact-us.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-picture-o"></i></div>
                            Liên hệ
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main class="pb-3">
                <div class="container-fluid px-0">
                    <h3 class="pl-3 py-3 admin-title">QUẢN LÝ TRANG VỀ CHÚNG TÔI</h3>
                    <div class="px-4 mt-4">
                        <form id="indexFrm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="mt-2">
                                <h5>Đoạn văn</h5>
                            </div>
                            <div class="form-group">
                                <label for="ourService">Đoạn văn 1</label>
                                <textarea class="form-control" name="content_1" rows="4" cols="50" ><?php echo $row['content_1'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="ourService">Đoạn văn 2</label>
                                <textarea class="form-control" name="content_2" rows="4" cols="50" ><?php echo $row['content_1'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="ourService">Đoạn văn 3</label>
                                <textarea class="form-control" name="content_3" rows="4" cols="50" ><?php echo $row['content_1'] ?></textarea>
                            </div>
                            <div class="mt-2">
                                <h5>Youtube link</h5>
                            </div>
                            <div class="form-group">
                                <label for="service">Đoạn văn</label>
                                <textarea class="form-control" name="youtube_link" rows="4" cols="50" ><?php echo $row['youtube_link'] ?></textarea>
                            </div>
                            <button type="submit" id="btn-index" class="btn btn-primary">Lưu</button>
                        </form>
                    </div>
                </div>
            </main>
            <footer class="footer py-4 bg-light mt-auto">
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
            } else {
                header('location:login.php');
            }
        ?>
    <?php
    $conn->close();
    ?>
</body>

</html>