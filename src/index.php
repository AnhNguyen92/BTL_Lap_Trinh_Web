<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trang chủ - Bài tập lớn Lập trình Web - 2020-2021</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/449b38c131.js" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container-fluid p-0">
        <header>
            <div class="header py-2">
                <div class="container">
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
                        <div class="d-flex align-item-end">
                            <div class="call-us">
                                <i class="fa fa-phone"></i>
                                <p>
                                    <span>Call Us</span>
                                    727 - 342 - 3241
                                </p>
                            </div>
                        </div>
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
                        <ul id="menu-content" class="menu-content collapse out">
                            <li class="active">
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">UI Elements</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                            <li>
                                <a href="#">New</a>
                            </li>
                            <li>
                                <a href="#">Profile</a>
                            </li>
                            <li>
                                <a style="border:none;" href="#">Users</a>
                            </li>
                        </ul>
                    </div>
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
                                    <img class="d-block w-100" src="images/da-lat-via-he.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/da-lat-via-he.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/da-lat-via-he.jpg" alt="Third slide">
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
                <div class="mt-4">
                    <article>
                        <div class="py-4 text-center">
                            <div class="title-tiret"></div>
                            <h1 class="article-title">WHO WE ARE</h1>
                        </div>
                        <div class="text-white">
                            <p class="article-content">- People have been dreaming in stone for more than 2,000 year. ancient Tomans built roads
                                that are still being used today!</P>
                            <p class="article-content">- As more and more people discover the enjoyment of outdoor living, one of the top
                                priotities is often the construcion of a driveway, walkway, patio, pool area, outdoor
                                kitchen or a place where they can relax. This area becomes an attractive outdoor room
                                for work or play. It is a place to read the Sunday paper, eat a meal, play with the
                                children, enjoy the sun, or entertain friends.</p>
                            <p class="article-content">- This outdoor living space is an important asset, increasing the value of a home as well
                                as reclaim unused areas of lawn and garden. The selection of the color and texture of
                                the pavers can be chosen to blend with the tone and scale of the hourse. A patio,
                                walkway or garden wall can connect the house with various parts of the landscape and
                                define spaces within the yard.</p>
                            <p class="article-content">- Whether you entertain social gatherings, Sunday Night Football or relaxing family
                                dinner by the pool, we can build an outdoor kitchen that accomodates all your needs.
                                With our design and construction skills, we can work with any space, large or small,
                                to build the outdoor experience that you and your family will enjoy for years to come.
                                Our designed kitchens are made to fit into your outside hardscape. A patio kitchen
                                can be built with many of the same amenities of an indoor kitchen along with wood
                                grills and smokers.</p>
                        </div>
                    </article>
                </div>
                <!-- process lat gach -->
                <div class="my-4">
                </div>
                <!-- our service -->
                <div class="my-4">
                    <article>
                        <div class="py-4 text-center">
                            <div class="title-tiret"></div>
                            <h1 class="article-title">OUR SERVICES</h1>
                        </div>
                        <div class="text-center text-white">
                            <p class="article-content">
                                We offer elegant products at affordable prices. We are proud to carry the complete line of FlagStone
                            </p>
                            <p class="article-content">Paver which can be viewed by <a href="#" target="_blank" class="service-link">clicking here</a>
                            </p>
                        </div>
                    </article>
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>