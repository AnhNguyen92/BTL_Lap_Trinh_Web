<?php
include 'conn.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $timeToDig = mysqli_real_escape_string($conn, $_POST["time_to_dig"]);
    $addingBase = mysqli_real_escape_string($conn, $_POST["adding_base"]);
    $compactBase = mysqli_real_escape_string($conn, $_POST["compact_base"]);
    $gradingAndPitch = mysqli_real_escape_string($conn, $_POST["grading_and_pitch"]);
    $layingFieldPavers = mysqli_real_escape_string($conn, $_POST["laying_field_pavers"]);
    $cuttingInTheBorder = mysqli_real_escape_string($conn, $_POST["cutting_in_the_border"]);
    $brickPaverBorder = mysqli_real_escape_string($conn, $_POST["brick_paver_border"]);
    $finalCompactingSand = mysqli_real_escape_string($conn, $_POST["final_compacting_sand"]);
    $drySweepingSand = mysqli_real_escape_string($conn, $_POST["dry_sweeping_sand"]);
    $finishingTouches = mysqli_real_escape_string($conn, $_POST["finishing_touches"]);
    $sql = "Update `educated_service_info` set `time_to_dig`='" . $timeToDig . "',`adding_base`='" . $addingBase
    . "', `compact_base`='" . $compactBase . "', `grading_and_pitch`='" . $gradingAndPitch
    . "', `laying_field_pavers`='" . $layingFieldPavers . "', `cutting_in_the_border`='" . $cuttingInTheBorder
    . "', `brick_paver_border`='" . $brickPaverBorder . "', `final_compacting_sand`='" . $finalCompactingSand
    . "', `dry_sweeping_sand`='" . $drySweepingSand . "', `finishing_touches`='" . $finishingTouches . "' where id=1";
    if (!mysqli_query($conn, $sql)) {
        echo "Error updating record: " . mysqli_error($conn);
        echo "<script>console.log('Debug Objects: " . mysqli_error($conn) . "' );</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quản lý trang Quy trình lát gạch - Bài tập lớn Lập trình Web - 2020-2021</title>
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
        $sql = "select * from educated_service_info where id=1";
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
                        <a class="nav-link" href="about-us.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Về chúng tôi
                        </a>
                        <a class="nav-link" href="service-info.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            Thông tin dịch vụ
                        </a>
                        <a class="nav-link" style="color:#fff;" href="process-paving.php">
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
                    <h3 class="pl-3 py-3 admin-title">QUẢN LÝ TRANG QUY TRÌNH LÁT GẠCH</h3>
                    <div class="px-4 mt-4">
                        <form id="indexFrm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="mt-2">
                                <h5>Các bước</h5>
                            </div>
                            <div class="form-group">
                                <label for="ourService">Time to dig</label>
                                <textarea class="form-control" name="time_to_dig" rows="4" cols="50" ><?php echo $row['time_to_dig'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="ourService">Adding base</label>
                                <textarea class="form-control" name="adding_base" rows="4" cols="50" ><?php echo $row['adding_base'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="ourService">Compact base</label>
                                <textarea class="form-control" name="compact_base" rows="4" cols="50" ><?php echo $row['compact_base'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="service">Grading and pitch</label>
                                <textarea class="form-control" name="grading_and_pitch" rows="4" cols="50" ><?php echo $row['grading_and_pitch'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="ourService">laying field pavers</label>
                                <textarea class="form-control" name="laying_field_pavers" rows="4" cols="50" ><?php echo $row['laying_field_pavers'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="ourService">Cutting in the border</label>
                                <textarea class="form-control" name="cutting_in_the_border" rows="4" cols="50" ><?php echo $row['cutting_in_the_border'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="ourService">Brick paver border</label>
                                <textarea class="form-control" name="brick_paver_border" rows="4" cols="50" ><?php echo $row['brick_paver_border'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="service">Final compacting sand</label>
                                <textarea class="form-control" name="final_compacting_sand" rows="4" cols="50" ><?php echo $row['final_compacting_sand'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="ourService">Dry sweeping sand</label>
                                <textarea class="form-control" name="dry_sweeping_sand" rows="4" cols="50" ><?php echo $row['dry_sweeping_sand'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="service">Finishing touches</label>
                                <textarea class="form-control" name="finishing_touches" rows="4" cols="50" ><?php echo $row['finishing_touches'] ?></textarea>
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