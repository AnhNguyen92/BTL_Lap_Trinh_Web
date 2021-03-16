<?php
require_once 'admin/conn.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bảng giá - Bài tập lớn Lập trình Web - 2020-2021</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/449b38c131.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/btl/css/style-index.css">
    <link rel="stylesheet" href="/btl/css/style-pricing.css">

</head>

<body>
    <div class="container-fluid p-0">
        <header>
            <div class="header py-2">
                <div class="w-100 mx-0">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="show-room">
                                <i class="fa fa-map-marker"></i>
                                <p>
                                    <span>Showroom Directions</span>
                                    2600 24th St N St Petersburg FL 33713
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="contact-us">
                                <i class="fa fa-envelope"></i>
                                <p>
                                    <span>Email Us</span>
                                    tampaBayPavers@gmail.com
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="call-us">
                                <i class="fa fa-phone"></i>
                                <p>
                                    <span>Call Us</span>
                                    727 - 342 - 3241
                                </p>
                            </div>
                        </div>
                        <?php
                            if (!isset($_SESSION["idLogin"])) {
                                echo "
                                <div class=\"d-flex align-items-center pr-3\">
                                    <div>
                                        <a style=\"color:white\" href=\"login.php\">Đăng nhập</a>
                                        <p class=\"mx-2\">|</p>
                                        <a style=\"color:white\" href=\"sign-up.php\">Đăng ký</a>
                                    </div>
                                </div>";
                        } else {
                            echo "
                            <div class=\"d-flex col-4 align-items-center  flex-row-reverse\">
                                <div>
                                    <ul class=\"navbar-nav ml-auto\">
                                        <li class=\"nav-item dropdown\">
                                            <a class=\"nav-link dropdown-toggle\" id=\"userDropdown\" href=\"#\" role=\"button\" data-toggle=\"dropdown\"
                                            aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-user fa-fw pr-2\"></i><span class=\"text-white\">" . $_SESSION["username"] . "</span>
                                            </a>
                                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"userDropdown\">
                                                <a class=\"dropdown-item\" href=\"user-info.php\">Thông tin cá nhân</a>
                                                <div class=\"dropdown-divider\"></div>
                                                <a class=\"dropdown-item\" href=\"logout.php\">Đăng xuất</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            ";
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="lower-header text-center py-4 text-white" style="background-color: #0064af; width:100%">
                <h1 style="font-size: 38px;">TAMPA BAY PAVER & HARDSCAPES</h1>
                <h3 class="py-2" style="font-size: 25px;">The Original and Still The Best Tampa Bay Pavers</h3>
                <p>Florida State Certified Builders License - CBC1261248</p>
            </div>
        </header>
        <!-- content -->
        <div class="main row no-gutters">
            <!-- content left -->
            <div class="col-3" style="background-color: #000000;min-height: 1000px;">
                <!-- navi -->
                <div class="nav-side-menu">
                    <div class="brand">MENU SITE</div>
                    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

                    <div class="menu-list">

                        <ul id="menu-content" class="menu-content collapse out">
                            <li>
                                <a href="index.php">Trang chủ</a>
                            </li>
                            <li>
                                <a href="about-us.php">Về chúng tôi</a>
                            </li>
                            <li>
                                <a href="gallery.php">Bộ sưu tập</a>
                            </li>
                            <li class="active">
                                <a href="pricing.php">Bảng giá</a>
                            </li>
                            <li style="border:none;">
                                <a href="contact-us.php">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main-content col-9" style="background-color: #202020;">
                <div class="main-top">
                    <a style="color:#f9c937" href="index.php">Trang chủ</a>
                    /
                    <a style="color:white" href="#">Bảng giá</a>
                </div>
                <div class="pl-3">
                    <div class="title-tiret pl-3"></div>
                    <span class="price-list">PRICE LIST</span>
                </div>
                <?php
                $username = "root";
                $password = "";
                $hostname = "localhost";
                $dbhandle = mysqli_connect($hostname, $username, $password);
                if (!$dbhandle) {
                    die("Unable to connect to MySQL");
                }
                $selected = mysqli_select_db($dbhandle, "company_intro")
                    or die("Could not select company_intro");
                $result = mysqli_query($dbhandle, "SELECT * FROM prices");
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="options">
                        <div class="option-table">
                            <ul class="opt-price">
                                <li class="price-top">BASIC</li>
                                <li class="price-sub"><?php echo $row['basic_content']; ?></li>
                                <li class="price-num">
                                    <div>
                                        <span style="vertical-align: 20px;">$</span>
                                        <span style="font-size: 60px;"><?php echo $row['basic_price']; ?></span>
                                        <span>.00</span>
                                    </div>
                                </li>
                                <li class="price-bottom"> Per Sq/Ft</li>
                                <li class="price-order"><a href="05-lien-he.php" class="button">ORDER NOW!</a></li>
                            </ul>
                        </div>
                        <div class="option-table">
                            <ul class="opt-price">
                                <li class="price-top">STANDARD</li>
                                <li class="price-sub"><?php echo $row['standard_content']; ?></li>
                                <li class="price-num">
                                    <div>
                                        <span style="vertical-align: 20px;">$</span>
                                        <span style="font-size: 60px;"><?php echo $row['standard_price']; ?></span>
                                        <span>.00</span>
                                    </div>
                                </li>
                                <li class="price-bottom"> Per Sq/Ft</li>
                                <li class="price-order"><a href="05-lien-he.php" class="button">ORDER NOW!</a></li>
                            </ul>
                        </div>
                        <div class="option-table">
                            <ul class="opt-price">
                                <li class="price-top">PREMIUM</li>
                                <li class="price-sub"><?php echo $row['premium_content']; ?></li>
                                <li class="price-num">
                                    <div>
                                        <span style="vertical-align: 20px;">$</span>
                                        <span style="font-size: 60px;"><?php echo $row['premium_price']; ?></span>
                                        <span>.00</span>
                                    </div>
                                </li>
                                <li class="price-bottom"> Per Sq/Ft</li>
                                <li class="price-order"><a href="05-lien-he.php" class="button">ORDER NOW!</a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <span class="sub-end">
                            <p class="pl-3"><span style="color: #08da08;">&#10004 </span><?php echo $row['note_1']; ?></p>
                            <p class="pl-3"><span style="color: #08da08;">&#10004 </span><?php echo $row['note_2']; ?></p>
                            <p class="pl-3"><span style="color: #08da08;">&#10004 </span><?php echo $row['note_3']; ?></p>
                        </span>
                    </div>
                <?php
                }
                mysqli_close($dbhandle);
                ?>
                <div class="main-foot">
                    <p>Call Us <span>NOW: 727 - 342 -3241</span></p>
                </div>
            </div>
        </div>
        <footer class="footer p-5">
            <div class="pb-4">
                <h3>GET SOCIAL WITH US</h3>
            </div>
            <div>
                <ul>
                    <li><a class="icoFacebook" href="https://www.facebook.com" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="icoInstagram" href="https://www.instagram.com" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a class="icoTwitter" href="https://twitter.com" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="icoLinkedin" href="https://www.linkedin.com" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a class="icoTwitter" href="https://www.pinterest.com" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                    <li><a class="icoLinkedin" href="https://www.snapchat.com" title="Snapchat"><i class="fa fa-snapchat"></i></a></li>
                </ul>
            </div>
        </footer>
    </div>
</body>

</html>