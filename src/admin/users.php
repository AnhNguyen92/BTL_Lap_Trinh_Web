<?php
include 'conn.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quản lý Trang thành viên - Bài tập lớn Lập trình Web - 2020-2021</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="../js/ajax.js"></script>
    <link href="../css/style-admin.css" rel="stylesheet" type="text/css">
</head>

<body class="sb-nav-fixed">
    <?php
        if (isset($_SESSION["username"])) {
    ?>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Company Introduction</a>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user fa-fw pr-2"></i><span class="text-white">
                    <?php echo $_SESSION["username"]; ?></span></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Cài đặt</a>
                    <a class="dropdown-item" href="#">Hồ sơ cá nhân</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Đăng xuất</a>
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
                        <a class="nav-link" style="color:#fff;" href="users.php">
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
            <main>
                <div class="container-fluid px-0">
                    <h3 class="pl-3 py-3 admin-title">QUẢN LÝ TÀI KHOẢN</h3>
                    <!-- Navbar Search-->
                    <div class="py-3 nav-search d-flex ">
                        <div class="d-flex align-items-center pl-4 pr-1">Tìm kiếm:</div>
                        <div>
                            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-4 my-2 my-md-0">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                                    <div class="input-group-append">
                                        <button class="btn btn-search" type="button"><i class="fas fa-search text-white"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="d-flex align-items-center add-account">
                            <a href="#addUserModal" data-toggle="modal"><i class="fa fa-plus mr-1"></i><span>Thêm tài khoản</span></a>
                        </div>
                        <div class="ml-auto pr-4">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>Danh sách tài khoản
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Id</th>
                                            <th>Tài khoản</th>
                                            <th>Họ</th>
                                            <th>Tên</th>
                                            <th>Giới tính</th>
                                            <th>Ngày sinh</th>
                                            <th>Trạng thái</th>
                                            <th>Quyền</th>
                                            <th style="text-align: center;">Hành Động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "select * from users";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            $i = 1;
                                            while ($row = $result->fetch_assoc()) {
                                        ?>
                                                <tr id="<?php echo $row["id"]; ?>">
                                                    <td sope="row"><?php echo $i ?></td>
                                                    <td>
                                                        <?php echo $row["id"]; ?>
                                                    </td>
                                                    <td><?php echo $row["username"]; ?></td>
                                                    <td><?php echo  $row["last_name"]; ?></td>
                                                    <td><?php echo $row["first_name"]; ?></td>
                                                    <td>
                                                        <?php echo ($row["gender"] == 'male' ? "Nam" : ($row["gender"] == 'female' ? "Nữ" : "Khác")); ?>
                                                    </td>
                                                    <td><?php echo date("d-m-Y",strtotime($row["birthday"])); ?></td>
                                                    <td>
                                                        <?php 
                                                            echo ($row["status"] == 'active') ? "Kích hoạt" : "Chưa kích hoạt";
                                                        ?>
                                                        </td>
                                                    <td>
                                                        <?php 
                                                            echo ($row["role"] == 'admin') ? "Quản trị" : "Người dùng"; 
                                                        ?>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <a href="#editUserModal" class="edit mr-3" data-toggle="modal">
                                                            <i class="fas fa-edit update" 
                                                            data-toggle="tooltip"
                                                            data-id="<?php echo $row["id"]; ?>" 
                                                            data-username="<?php echo $row["username"]; ?>" 
                                                            data-password="<?php echo $row["password"]; ?>"
                                                            data-lname="<?php echo $row["last_name"]; ?>"
                                                            data-fname="<?php echo $row["first_name"]; ?>"
                                                            data-gender="<?php echo $row["gender"]; ?>"
                                                            data-birthday="<?php echo $row["birthday"]; ?>" 
                                                            data-status="<?php echo $row["status"]; ?>"
                                                            data-role="<?php echo $row["role"]; ?>"
                                                            title="Chỉnh sửa"></i>
                                                        </a>
                                                        <a href="#deleteUserModal" class="delete text-danger" data-id="<?php echo $row["id"]; ?>" data-toggle="modal">
                                                            <i class="far fa-trash-alt" data-id="<?php echo $row["id"]; ?>" data-toggle="tooltip" title="Xóa"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php
                                                $i++;
                                            }
                                            ?>
                                        <?php
                                        } else {
                                            echo "<tr>";
                                            echo "<th></th>";
                                            echo "<td colspan='100%' class='text-center'>0 kết quả!</td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Modal HTML -->
                <div id="addUserModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form id="user_form">
                                <div class="modal-header">
                                    <h4 class="modal-title text-uppercase text-center mx-auto">Thêm tài khoản</h4>
                                    <button type="button" class="close ml-0" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="id" name="id" class="form-control" required>
                                    <div class="form-group">
                                        <label>Tài khoản <span class="text-danger">*</span></label>
                                        <input type="text" id="username" name="username" minlength="5" maxlength="40" class="form-control" required>
                                        <small id="err-username" class="d-none err-username form-text text-danger">Tài khoản phải có độ dài từ 6 đến 100 ký tự!</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu <span class="text-danger">*</span></label>
                                        <input type="password" id="password" name="password" minlength="5" maxlength="40" class="form-control" required>
                                        <small id="err-password" class="d-none err-password form-text text-danger">Mật khẩu phải có độ dài từ 6 đến 100 ký tự!</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Họ</label>
                                        <input type="text" id="lname" name="last_name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tên</label>
                                        <input type="text" id="fname" name="first_name" class="form-control">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Ngày sinh:</label>
                                            <div >
                                                <input class="form-control" placeholder="dd-mm-yyyy" name="birthday" id="birthday" type="date">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Giới tính</label>
                                            <select class="custom-select" name="gender" id="gender">
                                                <option value="male" >Nam</option>
                                                <option value="female">Nữ</option>
                                                <option value="other">Khác</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Quyền</label>
                                            <select class="custom-select" name="role" id="role">
                                                <option value="admin" >Quản trị</option>
                                                <option value="regular_user" selected>Người dùng</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Trạng thái</label>
                                            <select class="custom-select" name="status" id="status">
                                                <option value="active" selected>Kích hoạt</option>
                                                <option value="in_active">Chưa kích hoạt</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" value="1" name="type">
                                    <input type="button" class="btn btn-light" data-dismiss="modal" value="Hủy bỏ">
                                    <button type="button" class="btn btn-success" id="btn-add">Thêm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Edit Modal HTML -->
                <div id="editUserModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form id="update_form">
                                <div class="modal-header">
                                    <h4 class="modal-title text-uppercase text-center mx-auto">Chỉnh sửa tài khoản</h4>
                                    <button type="button" class="close ml-0" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="id_u" name="id" class="form-control" required>
                                    <div class="form-group">
                                        <label>Tài khoản <span class="text-danger">*</span></label>
                                        <input type="text" id="username_u" name="username" readonly minlength="6" maxlength="100" class="form-control">
                                        <small id="err-username-u" class="d-none err-username form-text text-danger">Tài khoản phải có độ dài từ 6 đến 100 ký tự!</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu <span class="text-danger">*</span></label>
                                        <input type="password" id="password_u" name="password" minlength="6" maxlength="100" class="form-control" required>
                                        <small id="err-password-u" class="d-none err-password form-text text-danger">Mật khẩu phải có độ dài từ 6 đến 100 ký tự!</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Họ</label>
                                        <input type="text" name="last_name" id="lname_u" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tên</label>
                                        <input type="text" id="fname_u" name="first_name" class="form-control">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Ngày sinh:</label>
                                            <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                                <input class="form-control" name="birthday" id="birthday_u" type="date">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Giới tính</label>
                                            <select class="custom-select" name="gender" id="gender_u">
                                                <option value="male">Nam</option>
                                                <option value="female">Nữ</option>
                                                <option value="other">Khác</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Quyền</label>
                                            <select class="custom-select" name="role" id="role_u">
                                                <option value="admin">Quản trị</option>
                                                <option value="regular_user">Người dùng</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Trạng thái</label>
                                            <select class="custom-select" name="status" id="status_u">
                                                <option value="active">Kích hoạt</option>
                                                <option value="in_active">Chưa kích hoạt</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" value="2" name="type">
                                        <input type="button" class="btn btn-light" data-dismiss="modal" value="Hủy bỏ">
                                        <button type="button" class="btn btn-info" id="update">Cập nhật</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Delete Modal HTML -->
                <div id="deleteUserModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <h4 class="modal-title">Xóa thông tin người dùng</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="id_d" name="id" class="form-control">
                                    <p>Bạn có muốn xóa dữ liệu này?</p>
                                    <p class="text-warning"><small>Dữ liệu đã xóa không thể khôi phục.</small></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-light" data-dismiss="modal" value="Hủy bỏ">
                                    <button type="button" class="btn btn-danger" id="delete">Xóa</button>
                                </div>
                            </form>
                        </div>
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