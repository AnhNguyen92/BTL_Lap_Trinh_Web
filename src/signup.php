<?php require_once("config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header-login-signup.php") ?>

<div class="col-md-9 content-right">
    <div class="upper-content login-content">

        <div class="article-title">
            <div class="title-tiret"></div>
            <h1 class="main-title">ĐĂNG KÝ THÀNH VIÊN</h1>
        </div>

        <div class="login-form">
            <form class="" action="insert-info.php" method="post">
                <div class="form-group"><label for="username"><span>First Name</span>
                        <input type="text" name="firstName" class="form-control" value=""></label>
                </div>

                <div class="form-group"><label for="password"><span>Last Name</span>
                        <input type="text" name="lastName" class="form-control" value=""></label>
                </div>

                <div class="form-group"><label for="username"><span>Date of Birth</span>
                        <input type="date" name="birthDay" class="form-control" value=""></label>
                </div>

                <div class="form-group"><label for="password"><span>User Name</span>
                        <input type="text" name="userName" class="form-control" value=""></label>
                </div>

                <div class="form-group"><label for="password"><span>Password</span>
                        <input type="text" name="password" class="form-control" value=""></label>
                </div>

                <div class="form-group" style="text-align:center; margin-top: 40px;">
                    <button type="submit" name="submit" value="ĐĂNG NHẬP">ĐĂNG KÝ</button>
                </div>


            </form>
        </div>

    </div>

</div>
</div>
</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>