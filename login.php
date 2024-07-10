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




            <form action="<?php echo htmlspecialchars('log.php'); ?>" method="POST">
                <label class="form-label" for="userName">نام کاربری</label>
                <input class="form-control" type="text" name="username" id="userName">


                <label class="form-label" for="passWord">پسورد</label>
                <input class="form-control" type="password" name="password" id="passWord">


                <button class="btn btn-success my-5" type="submit">ورود</button>
            </form>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>