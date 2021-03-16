<?php require_once("config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<?php
$query = query("SELECT * FROM educated_service_info");
confirm($query);

while ($row = fetch_array($query)) :
    $time_to_dig = $row['time_to_dig'];
    $adding_base = $row['adding_base'];
    $compact_base = $row['compact_base'];
    $grading_and_pitch = $row['grading_and_pitch'];
    $laying_field_pavers = $row['laying_field_pavers'];
    $cutting_in_the_border = $row['cutting_in_the_border'];
    $brick_paver_border = $row['brick_paver_border'];
    $final_compacting_sand = $row['final_compacting_sand'];
    $dry_sweeping_sand = $row['dry_sweeping_sand'];
    $finishing_touches = $row['finishing_touches'];

?>
    <div class="col-md-9 content-right">
        <div class="upper-content">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="gallery.php">Bộ sưu tập</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Quy trình lát gạch</li>
                </ol>
            </nav>

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <div class="title-tiret"></div>
                            <h1 class="main-title">STEP 1</h1>
                            <h4 class="main-desc">TIME TO DIG</h4>
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><?php echo $time_to_dig; ?></div>
                        <div class="img-inside"><img src="images/process-paving/step1.jpg" alt=""></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <div class="title-tiret"></div>
                            <h1 class="main-title">STEP 2</h1>
                            <h4 class="main-desc">ADDING BASE</h4>
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><?php echo $adding_base; ?></div>
                        <div class="img-inside"><img src="images/process-paving/step2.jpg" alt=""></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            <div class="title-tiret"></div>
                            <h1 class="main-title">STEP 3</h1>
                            <h4 class="main-desc">COMPACTING THE BASE</h4>
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><?php echo $compact_base; ?></div>
                        <div class="img-inside"><img src="images/process-paving/step3.jpg" alt=""></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            <div class="title-tiret"></div>
                            <h1 class="main-title">STEP 4</h1>
                            <h4 class="main-desc">GRADING AND PITCH</h4>
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><?php echo $grading_and_pitch; ?></div>
                        <div class="img-inside"><img src="images/process-paving/step4.jpg" alt=""></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            <div class="title-tiret"></div>
                            <h1 class="main-title">STEP 5</h1>
                            <h4 class="main-desc">LAYING FIELD PAVERS</h4>
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><?php echo $laying_field_pavers; ?></div>
                        <div class="img-inside">
                            <img src="images/process-paving/step5_1.jpg" alt=""> <br>
                            <img src="images/process-paving/step5_2.jpg" alt=""> <br>
                            <img src="images/process-paving/step5_3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                            <div class="title-tiret"></div>
                            <h1 class="main-title">STEP 6</h1>
                            <h4 class="main-desc">CUTTING IN THE BORDER</h4>
                        </button>
                    </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">

                        <div class="accordion-body"><?php echo $cutting_in_the_border; ?></div>
                        <div class="img-inside">
                            <img src="images/process-paving/step6_1.jpg" alt=""> <br>
                            <img src="images/process-paving/step6_2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                            <div class="title-tiret"></div>
                            <h1 class="main-title">STEP 7</h1>
                            <h4 class="main-desc">BRICK PAVER BORDER</h4>
                        </button>
                    </h2>
                    <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><?php echo $brick_paver_border; ?></div>
                        <div class="img-inside"><img src="images/process-paving/step7.jpg" alt=""></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                            <div class="title-tiret"></div>
                            <h1 class="main-title">STEP 8</h1>
                            <h4 class="main-desc">FINAL COMPACTING WITH SAND</h4>
                        </button>
                    </h2>
                    <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">

                        <div class="accordion-body"><?php echo $final_compacting_sand; ?></div>
                        <div class="img-inside">
                            <img src="images/process-paving/step8_1.jpg" alt=""> <br>
                            <img src="images/process-paving/step8_2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                            <div class="title-tiret"></div>
                            <h1 class="main-title">STEP 9</h1>
                            <h4 class="main-desc">DRY SWEEPING SAND AND WET WASHING SAND INTO JOINTS</h4>
                        </button>
                    </h2>
                    <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">

                        <div class="accordion-body"><?php echo $dry_sweeping_sand; ?></div>
                        <div class="img-inside">
                            <img src="images/process-paving/step9_1.jpg" alt=""> <br>
                            <img src="images/process-paving/step9_2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                            <div class="title-tiret"></div>
                            <h1 class="main-title">STEP 10</h1>
                            <h4 class="main-desc">FINISHING TOUCHES FOR THE PAVER INSTALLATION</h4>
                        </button>
                    </h2>
                    <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">

                        <div class="accordion-body"><?php echo $finishing_touches; ?></div>
                        <div class="img-inside">
                            <img src="images/process-paving/step10.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php endwhile ?>
</div>
</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>