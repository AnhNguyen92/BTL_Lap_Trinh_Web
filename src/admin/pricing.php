<?php
include 'conn.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $basicContent = mysqli_real_escape_string($conn, $_POST["basic_content"]);
    $standardContent = mysqli_real_escape_string($conn, $_POST["standard_content"]);
    $premiumContent = mysqli_real_escape_string($conn, $_POST["premium_content"]);
    $basicPrice = mysqli_real_escape_string($conn, $_POST["basic_price"]);
    $standardPrice = mysqli_real_escape_string($conn, $_POST["standard_price"]);
    $premiumPrice = mysqli_real_escape_string($conn, $_POST["premium_price"]);
    $note1 = mysqli_real_escape_string($conn, $_POST["note_1"]);
    $note2 = mysqli_real_escape_string($conn, $_POST["note_2"]);
    $note3 = mysqli_real_escape_string($conn, $_POST["note_3"]);
    $sql = "Update `prices` set `basic_content`='" . $basicContent . "', `standard_content`='" . $standardContent 
    . "', `premium_content`='" . $premiumContent . "', `basic_price`='" . $basicPrice . "', `standard_price`='" 
    . $standardPrice . "', `premium_price`='" . $premiumPrice . "', `note_1`='" . $note1 
    . "', `note_2`='" . $note2 . "', `note_3`='" . $note3 . "' where id=1";
    // mysqli_query($conn, $sql);
    if (!mysqli_query($conn, $sql)) {
    //     echo "Record updated successfully";
    // } else {
        echo "Error updating record: " . mysqli_error($conn);
        echo "<script>console.log('Debug Objects: " . mysqli_error($conn) . "' );</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quản lý trang Bảng giá - Bài tập lớn Lập trình Web - 2020-2021</title>
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
        $sql = "select * from prices where id=1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
    ?>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">Company Introduction</a>
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
                    <a class="dropdown-item" href="login.html">Logout</a>
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
                        <a class="nav-link" href="process-paving.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div>
                            Quy trình lát gạch
                        </a>
                        <a class="nav-link" style="color:#fff;" href="pricing.php">
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
                    <h3 class="pl-3 py-3 admin-title">QUẢN LÝ TRANG BẢNG GIÁ</h3>
                    <div class="px-4 mt-4">
                        <form id="indexFrm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div>
                                <h5>Loại nội dung</h5>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Basic conent</label>
                                    <textarea class="form-control" name="basic_content" rows="4" cols="50" ><?php echo $row['basic_content'] ?></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Standard conent</label>
                                    <textarea class="form-control" name="standard_content" rows="4" cols="50" ><?php echo $row['standard_content'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Premium conent</label>
                                    <textarea class="form-control" name="premium_content" rows="4" cols="50" ><?php echo $row['premium_content'] ?></textarea>
                                </div>
                            </div>
                            <div class="mt-2">
                                <h5>Giá cả</h5>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-4">
                                    <label for="ourService">Basic price</label>
                                    <textarea class="form-control" name="basic_price" rows="1" cols="50" ><?php echo $row['basic_price'] ?></textarea>
                                </div>
                                <div class="form-group col-4">
                                    <label for="service">Standard price</label>
                                    <textarea class="form-control" name="standard_price" rows="1" cols="50" ><?php echo $row['standard_price'] ?></textarea>
                                </div>
                                <div class="form-group col-4">
                                    <label for="service">Premium price</label>
                                    <textarea class="form-control" name="premium_price" rows="1" cols="50" ><?php echo $row['premium_price'] ?></textarea>
                                </div>
                            </div>
                            <div class="mt-2">
                                <h5>Chú thích</h5>
                            </div>
                            <div class="form-group">
                                <label for="ourService">Chú thích 1</label>
                                <textarea class="form-control" name="note_1" rows="2" cols="50" ><?php echo $row['note_1'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="ourService">Chú thích 2</label>
                                <textarea class="form-control" name="note_2" rows="2" cols="50" ><?php echo $row['note_2'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="ourService">Chú thích 3</label>
                                <textarea class="form-control" name="note_3" rows="2" cols="50" ><?php echo $row['note_3'] ?></textarea>
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