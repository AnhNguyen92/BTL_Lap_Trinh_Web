<?php require_once("config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<?php
$query = query("SELECT * FROM service_info WHERE id = 4");
confirm($query);

while ($row = fetch_array($query)) :
    $nameSERVICE = $row['name'];
    $contentSERVICE = $row['content'];
?>
    <div class="col-md-9 content-right">
        <div class="upper-content">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="gallery.php">Bộ sưu tập</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sàn hồ bơi</li>
                </ol>
            </nav>

        </div>
        <div class="lower-content-article">
            <div class="title-tiret"></div>
            <?php echo $nameSERVICE; ?>
            <div class="row img-collection">
                <div class="col-md-3 collect-1">
                    <img src="images/pooldeck/pooldeck_1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-3 collect-1">
                    <img src="images/pooldeck/pooldeck_2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-3 collect-1">
                    <img src="images/patio/patio_3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-3 collect-1">
                    <img src="./images/patio/patio_4.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-3 collect-1">
                    <img src="images/kitchen/kitchen_5.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-3 collect-1">
                    <img src="images/kitchen/kitchen_6.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-3 collect-1">
                    <img src="images/kitchen/kitchen_7.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-3 collect-1">
                    <img src="images/kitchen/kitchen_8.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-3 collect-1">
                    <img src="images/kitchen/kitchen_9.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-3 collect-1">
                    <img src="images/kitchen/kitchen_10.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-3 collect-1">
                    <img src="images/kitchen/kitchen_11.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-3 collect-1">
                    <img src="images/kitchen/kitchen_12.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-3 collect-1">
                    <img src="images/kitchen/kitchen_13.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-3 collect-1">
                    <img src="images/kitchen/kitchen_14.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-3 collect-1">
                    <img src="images/kitchen/kitchen_15.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-3 collect-1">
                    <img src="images/kitchen/kitchen_16.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
<?php endwhile ?>
</div>
</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>