<?php require_once("config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>
<div class="col-md-9 content-right">
    <div class="upper-content">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bộ sưu tập</li>
            </ol>
        </nav>
        <div class="article-title">
            <div class="title-tiret"></div>
            <h1 class="main-title">HOW WE MAKE IT ON RIGHT !</h1>
            <p>- Get Educated on Brick Pavers. This page is going to take you step by step for a small job we did for Sonny.</p>
            <p>- By seeing how Brick Pavers are laid and the steps needed to ensure they will last their lifetime we are hoping that it will help you understand the work
                involved and knowledge needed to complete a brick paver job.</p>
        </div>
        <div class="process-step-btn">
            <a href="get-educated.php"><button type="submit">GET EDUCATED ON BRICK PAVERS</button></a>
        </div>
    </div>
    <div class="lower-content-article">
        <div class="title-tiret"></div>
        <h1 class="main-title">GALLERY</h1>
        <div class="row img-collection">
            <div class="col-md-4 collect-1">
                <a href="patio.php">
                    <img src="./images/gallery/patio.jpg" class="img-fluid" alt="">
                    <p><i class="icon-SolidArrowRight"></i>Custom Patio Installation and Design</p>
                </a>
            </div>
            <div class="col-md-4 collect-1">
                <a href="custom-outdoor.php">
                    <img src="./images/gallery/outdoor-kitchen.jpg" class="img-fluid" alt="">
                    <p><i class="icon-SolidArrowRight"></i>Custom Outdoor Kitchen Installation and Design</p>
                </a>
            </div>
            <div class="col-md-4 collect-1">
                <a href="pooldeck.php">
                    <img src="./images/gallery/pooldeck.jpg" class="img-fluid" alt="">
                    <p><i class="icon-SolidArrowRight"></i>Custom Pooldeck Installation and Design</p>
                </a>
            </div>
            <div class="col-md-4 collect-1">
                <a href="driveway.php">
                    <img src="./images/gallery/driveway.jpg" class="img-fluid" alt="">
                    <p><i class="icon-SolidArrowRight"></i>Custom Driveway Installation and Design</p>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>