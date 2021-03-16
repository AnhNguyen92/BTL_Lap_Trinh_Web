<?php
include 'admin/conn.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trang chủ - Bài tập lớn Lập trình Web - 2020-2021</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/449b38c131.js" crossorigin="anonymous"></script>
    <link href="css/style-index.css" rel="stylesheet" type="text/css">

</head>

<body>
    <?php
    $sql = "select * from index_page where id=1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    ?>
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
                            <div class=\"d-flex col-4 align-items-center flex-row-reverse\">
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
            <div class="lower-header text-center py-4 text-white">
                <h1>TAMPA BAY PAVER & HARDSCAPES</h1>
                <h3 class="py-2">The Original and Still The Best Tampa Bay Pavers</h3>
                <p>Florida State Certified Builders License - CBC1261248</p>
            </div>
        </header>
        <!-- content -->
        <div class="main row no-gutters">
            <!-- content left -->
            <div class="content-left col-3">
                <!-- navi -->
                <div class="nav-side-menu">
                    <div class="brand">MENU SITE</div>
                    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                    <div class="menu-list">
                        <ul id="menu-content" class="menu-content collapse show">
                            <li class="active">
                                <a href="index.php">Trang chủ</a>
                            </li>
                            <li>
                                <a href="about-us.php">Về chúng tôi</a>
                            </li>
                            <li>
                                <a href="gallery.php">Bộ sưu tập</a>
                            </li>
                            <li>
                                <a href="pricing.php">Bảng giá</a>
                            </li>
                            <li>
                                <a style="border:none;" href="contact-us.php">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>

                </div>
                <div class="nav-last-item">
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="main-content col-9">
                <!-- slider -->
                <div class="slider">
                    <div class="slider-lst">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block" src="images/index/carousel/01.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="images/index/carousel/02.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="images/index/carousel/03.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- who we are -->
                <div class="mt-4 mb-5">
                    <article>
                        <div class="py-4 text-center">
                            <div class="title-tiret"></div>
                            <h1 class="article-title">WHO WE ARE</h1>
                        </div>
                        <div class="text-white">
                            <p class="article-content"><?php echo $row['who_we_are_p1'] ?></p>
                            <p class="article-content"><?php echo $row['who_we_are_p2'] ?></p>
                            <p class="article-content"><?php echo $row['who_we_are_p3'] ?></p>
                            <p class="article-content"><?php echo $row['who_we_are_p4'] ?></p>
                        </div>
                    </article>
                </div>
                <!-- brick process -->
                <div class="d-flex">
                    <div class="col-4 p-0"><img class="w-100" src="images/index/who-we-are/01.jpg" alt="image"></div>
                    <div class="col-4 p-0"><img class="w-100" src="images/index/who-we-are/02.jpg" alt="image"></div>
                    <div class="col-4 p-0"><img class="w-100" src="images/index/who-we-are/03.jpg" alt="image"></div>
                </div>
                <!-- our service -->
                <div class="our-service">
                    <article>
                        <div class="py-4 text-center">
                            <div class="title-tiret"></div>
                            <h1 class="article-title">OUR SERVICES</h1>
                        </div>
                        <div class="text-center text-white">
                            <p class="article-content"><?php echo $row['our_service'] ?></p>
                            <a href="service.php" target="_blank" class="service-link">clicking here</a>
                            </p>
                        </div>
                    </article>
                    <div class="service-content">
                        <div class="service=img-lst d-flex px-auto">
                            <div class="service-img-item col-4">
                                <div>
                                    <div class="service-img-wrapper">
                                        <img src="images/index/our-service/01.jpg" alt="image">
                                    </div>
                                </div>
                                <div class="service-item-text">
                                    <p>Complete Brick Paver and Travertine Paver Installations.</p>
                                </div>
                            </div>
                            <div class="service-img-item col-4">
                                <div>
                                    <div class="service-img-wrapper">
                                        <img src="images/index/our-service/02.jpg" alt="image">
                                    </div>
                                </div>
                                <div>
                                    <p class="service-item-text">Custom Outdoor Kitchen Installation and Design</p>
                                </div>
                            </div>
                            <div class="service-img-item col-4">
                                <div>
                                    <div class="service-img-wrapper">
                                        <img src="images/index/our-service/03.jpg" alt="image">
                                    </div>
                                </div>
                                <div>
                                    <p class="service-item-text">Cleaning, Sealing and Repair of your Existing Pavers</p>
                                </div>
                            </div>
                        </div>
                        <div class="action-link">
                            <a href="gallery.php" target="_blank">VIEW GALLERY</a>
                        </div>
                    </div>
                </div>
                <!-- pricing -->
                <div class="my-4 pricing">
                    <article>
                        <div class="py-4 text-center">
                            <div class="title-tiret"></div>
                            <h1 class="article-title">PRICING</h1>
                        </div>
                        <div class="text-center text-white">
                            <p class="article-content col-10 mx-auto"><?php echo $row['pricing'] ?></p>
                        </div>
                    </article>
                    <div class=" col-8 mx-auto price-offer-block">
                        <div class="outer-triangle">
                        </div>
                        <div class="middle-border">
                            <div class="price-offer-bg">
                                <div class="col-8 pt-5 po-detail">
                                    <span class="po-tip">As low as</span>
                                    <span class="po-unit">$</span>
                                    <span class="po-price">6</span>
                                    <span class="po-price-duration">.00</span>
                                    <div class="col-8 ml-auto text-right fs-40">Per Sq/Ft</div>
                                </div>
                                <div class="mx-4">
                                    <ul class="dashes">
                                        <li>Including Installation and Materials</li>
                                        <li>Custom brick paver hardscape designs: Pools, Patios, Walkways, Driveways, Outdoor Kitchens, and even your Porch or Hot Tub Area.</li>
                                        <li>FREE consultations and guaranteed pricing contracts knowing your projects exact cost just got easier.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rotate-wrapper">
                                <span class="rotate">We Offer</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div></div>
                        <div class="action-link">
                            <a href="pricing.php" target="_blank">VIEW FULL PRICING GUIDE</a>
                        </div>
                    </div>
                </div>
                <!-- contact us -->
                <div class="contact-us-info">
                    <div class="contact-number">
                        Call Us NOW: 727 - 342 - 3241
                    </div>
                    <article>
                        <div class="py-4 text-center">
                            <div class="title-tiret"></div>
                            <h1 class="article-title">CONTACT US</h1>
                            <h3 class="contact-us-tip">FOR FREE SAME DAY ESTIMATES</h3>
                        </div>
                        <div class="text-center text-white">
                            <p class="article-content col-10 mx-auto"><?php echo $row['contact_us'] ?></p>
                        </div>
                    </article>
                    <div>
                        <div></div>
                        <div class="action-link">
                            <a href="contact.php" target="_blank">CONTACT US NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
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
    <?php
    $conn->close();
    ?>
</body>

</html>