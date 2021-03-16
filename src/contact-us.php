<?php
require_once 'admin/conn.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Liên hệ - Bài tập lớn Lập trình Web - 2020-2021</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/449b38c131.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/btl/css/style-index.css">
    <link rel="stylesheet" href="/btl/css/style-contact-us.css">
    <style>
        ::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #ffffff;
            opacity: 1;
            /* Firefox */
        }

        :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #ffffff;
        }

        ::-ms-input-placeholder {
            /* Microsoft Edge */
            color: #ffffff;
        }
    </style>
</head>

<body>
    <?php
    $err = "";
    $username = "root";
    $password = "";
    $hostname = "localhost";
    $dbhandle = mysqli_connect($hostname, $username, $password);
    if (!$dbhandle) {
        die("Unable to connect to MySQL");
    }
    $selected = mysqli_select_db($dbhandle, "company_intro")
        or die("Could not select contact");
    if (isset($_POST['button'])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
        $price = $_POST["price"];
        if ((empty($_POST["name"]) == true) || (empty($_POST["email"]) == true) || (empty($_POST["address"]) == true) || (empty($_POST["phone"]) == true) || (empty($_POST["message"]) == true)) {
            $err = "All fields are required!";
        } else {
            if (mysqli_query($dbhandle, "INSERT INTO contact_information (name, email, address, phone, message, price) VALUE('$name', '$email', '$address','$phone','$message', '$price')")) {
                $err = "I have received infomation!";
            } else {
                $ketqua = "I have not received infomation";
            }
        }
    }
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
                                                <a class=\"dropdown-item\" href=\"login.html\">Đăng xuất</a>
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
                            <li>
                                <a href="pricing.php">Bảng giá</a>
                            </li>
                            <li style="border:none;" class="active">
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
                    <a style="color:white" href="#">Liên hệ</a>
                </div>
                <div class="pl-3">
                    <div class="title-tiret"></div>
                    <span class="cont-us">CONTACT US</span>
                </div>
                <div class="contact">
                    <form action="" method="POST">
                        <table>
                            <tr>
                                <td class="td1"></td>
                                <td class="td2" style="text-align:right;">
                                    <span class="baoloi"><?php echo $err; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="td1">
                                    <label for="Name">Name</label>
                                </td>
                                <td class="td2">
                                    <input type="text" id="name" name="name" id="name" placeholder="Your name ...">
                                </td>
                            </tr>
                            <tr>
                                <td class="td1">
                                    <label for="Email">Email</label>
                                </td>
                                <td class="td2">
                                    <input type="text" id="email" name="email" id="email" placeholder="Your email ...">
                                </td>
                            </tr>
                            <tr>
                                <td class="td1">
                                    <label for="address">Address</label>
                                </td>
                                <td class="td2">
                                    <input type="text" id="address" name="address" id="address" placeholder="Your address ...">
                                </td>
                            </tr>
                            <tr>
                                <td class="td1">
                                    <label for="Phone">Phone</label>
                                </td>
                                <td class="td2">
                                    <input type="text" id="phone" name="phone" id="phone" placeholder="Your phone ...">
                                </td>
                            </tr>
                            <tr>
                                <td class="td1">
                                    <label for="Message">Message</label>
                                </td>
                                <td class="td2">
                                    <textarea type="text" id="message" name="message" id="message" placeholder="Your message ..." rows="10"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="td1">
                                    <label for="Price">Price</label>
                                </td>
                                <td class="td2">
                                    <select name="price" id="price">
                                        <option selected value="Basic">Basic - $3.00</option>
                                        <option value="Standar">Standar - $6.00</option>
                                        <option value="Premium">Premium - $12.00</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="text-align: right;">
                                    <button type="submit" class="button" name="button" id="button" value="Submit">SEND REQUEST</button>
                                </td>
                            </tr>
                        </table>
                    </form>
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
                $result = mysqli_query($dbhandle, "SELECT google_map_link FROM contact_us");
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="map">
                        <iframe src="<?php echo $row["google_map_link"]; ?>" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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