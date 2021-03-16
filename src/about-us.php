<?php require_once("config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<?php
$query = query("SELECT * FROM about_us");
confirm($query);

while ($row = fetch_array($query)) :
    $contentID = $row['id'];
    $content1 = $row['content_1'];
    $content2 = $row['content_2'];
    $content3 = $row['content_3'];
    $contentVIDEO = $row['youtube_link'];

?>

    <div class="col-md-9 content-right">
        <div class="upper-content">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
            <div class="article-title">
                <div class="title-tiret"></div>
                <h1 class="main-title">ABOUT US</h1>
                <p><?php echo $content1; ?></p>
                <p><?php echo $content2; ?></p>
                <p><?php echo $content3; ?></p>
            </div>
            <div class="process-step">
                <div class="col-md-2 step-1st">
                    <h1>01</h1>
                    <p>STRATEGY</p>
                    <i class="icon-ChamTronSolid"></i>
                </div>
                <div class="col-md-2 step-1st">
                    <h1>02</h1>
                    <p>ORGANIZATION</p>
                    <i class="icon-ChamTronSolid"></i>
                </div>
                <div class="col-md-2 step-1st">
                    <h1>03</h1>
                    <p>MANAGEMENT</p>
                    <i class="icon-ChamTronSolid"></i>
                </div>
                <div class="col-md-2 step-1st">
                    <h1>04</h1>
                    <p>SUPPORT</p>
                    <i class="icon-ChamTronSolid"></i>
                </div>
                <hr>
            </div>
        </div>
        <div class="lower-content">
            <iframe src="<?php echo $contentVIDEO; ?>" frameborder="0" allow="accelerometer; 
                        autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    <?php endwhile ?>
    </div>
    </div>
    </div>

    <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>