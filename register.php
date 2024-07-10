<?php include('header.php'); ?>
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <?php


            if (isset($_GET['err'])) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo $_GET['err']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <?php
            if (isset($_GET['isRegister']) && $_GET['isRegister'] == 'true') : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    ثبت نام انجام شد.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>


            <?php
            if (isset($_GET['isRegister']) && $_GET['isRegister'] == 'false') : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    ثبت نام انجام نشد.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>



            <form action="<?php echo htmlspecialchars('reg.php'); ?>" enctype="multipart/form-data" method="POST" onsubmit="return validateForm()">
                <label class="form-label" for="userName">نام کاربری</label>
                <input class="form-control" type="text" name="username" id="userName" onkeyup="validateForm()">
                <p class="form-text text-danger" id="userError"></p>

                <label class="form-label" for="Email">ایمیل</label>
                <input class="form-control" type="email" name="email" id="Email" onkeyup="validateForm()">
                <p class="form-text text-danger" id="emailError"></p>

                <label class="form-label" for="phoneNumber">شماره تلفن</label>
                <input class="form-control" type="number" name="phonenumber" id="phoneNumber" onkeyup="validateForm()">
                <p class="form-text text-danger" id="phoneError"></p>


                <label class="form-label" for="passWord">پسورد</label>
                <input class="form-control" type="password" name="password" id="passWord" onkeyup="validateForm()">
                <p class="form-text text-danger" id="passwordError"></p>

                <label class="form-label">عکس پروفایل</label>
                <input class="form-control" type="file" name="profile" id="Profile" onchange="validateForm()">
                <button class="btn btn-success my-5" type="submit" id="reg-btn">ارسال</button>
            </form>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>