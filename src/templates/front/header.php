
<?php 
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
    // echo "Current page: " . "$activePage";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php
        switch ($activePage) {
            case 'index':
                echo "Trang chủ -"; break;
            case 'about-us':
                echo "Về chúng tôi -";  break;
            case 'contact-us':
                echo "Liên hệ -";   break;
            case 'custorm-outdoor':
                echo "Cửa sổ ngoài trời -"; break;
            case 'driveway':
                echo "Lối đi ngoài trời -"; break;
            case 'gallery':
                echo "bộ sưu tập -";    break;
            case 'get-educated':
                echo "Tiến trình lát gạch -";   break;
            case 'login':
                echo "Đăng nhập -";     break;
            case 'logout':
                echo "Đăng xuất -";     break;
            case 'patio':
                echo "Sân trong -";     break;
            case 'pooldeck':
                echo "Sàn hồ bơi -";    break;
            case 'pricing':
                echo "Bảng giá -";      break;
            case 'signup':
                echo "Đăng ký -";       break;
            case 'user-info':
                echo "Thông tin cá nhân -";     break;
            default:
                break;
            }
    ?>    
    Bài tập lớn Lập trình Web - 2020-2021</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/449b38c131.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/btl/css/style-canh.css">
    <link rel="stylesheet" href="/btl/icon_font_1/style-icon-font-1.css">
    <link rel="stylesheet" href="/btl/icon_font_2/style-icon-font-2.css">
</head>

<body>

    <div class="container-fluid">
        <div class="wrap-head">
            <div class="row top-head">
                <div class="col-md-9">
                    <div class="col-md-4 icon">
                        <i class="icon-address"></i>
                        <div>
                            <span>Showroom Directions</span>
                            <p>2600 24th St N St Petersburg FL 33713</p>
                        </div>
                    </div>

                    <div class="col-md-4 icon iconEmail">
                        <i class="icon-email"></i>
                        <div>
                            <span>Email Us</span>
                            <p>TampaBayPavers@gmail.com</p>
                        </div>
                    </div>


                    <div class="col-md-3 icon">
                        <i class="icon-phone247"></i>
                        <div>
                            <span>Call Us</span>
                            <p>727 - 342 - 3241</p>
                        </div>
                    </div>
                </div>
                <?php
                    if (!isset($_SESSION["idLogin"])) {
                    echo "
                    <div class=\"col-3 d-flex align-items-center\">
                        <div class=\"login-logout\">
                            <a style=\"color:white\" href=\"login.php\">Đăng nhập</a>
                                <p class=\"mx-2\">|</p>
                            <a style=\"color:white\" href=\"signup.php\">Đăng ký</a>
                        </div>
                    </div>";
                    } else {
                        echo "
                        <div class=\"d-flex col-3 align-items-center  flex-row-reverse\">
                            <div>
                                <ul class=\"navbar-nav ml-auto\">
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" id=\"userDropdown\" href=\"#\" role=\"button\" data-toggle=\"dropdown\"
                                            aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-user fa-fw profile-icon\"></i><span class=\"text-white\">" . $_SESSION["username"] . "</span>
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
        <div class="img-banner">
            <img src="./images/top-head.jpg" alt="">
            <div class="col-md-9 title-bar">
                <h2>TAMPA BAY PAVER & HARDSCAPES</h2>
                <h5>The Original and Still The Best Tampa Bay Pavers</h5>
                <p>Florida State Certified Builders License - CBC1261248</p>
            </div>
            <div class="clear-fix"></div>
        </div>
        <div class="wrap-content">
            <div class="content-border">
                <div class="col-md-3 content-left">
                    <div class="nav-side-menu">    
                        <div class="brand">MENU SITE</div>
                        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                        <div class="menu-list">
                            <ul id="menu-content" class="menu-content collapse show">
                                <li <?php if ($activePage == "index") echo "class=\"active\""; ?> >
                                    <a href="index.php">Trang chủ</a>
                                </li>
                                <li <?php if ($activePage == "about-us") echo "class=\"active\""; ?>>
                                    <a href="about-us.php">Về chúng tôi</a>
                                </li>
                                <li <?php if ($activePage == "gallery") echo "class=\"active\""; ?>>
                                    <a href="gallery.php">Bộ sưu tập</a>
                                </li>
                                <li <?php if ($activePage == "pricing") echo "class=\"active\""; ?>>
                                    <a href="pricing.php">Bảng giá</a>
                                </li>
                                <li <?php if ($activePage == "contact-us") echo "class=\"active\""; ?>>
                                    <a href="contact-us.php">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>