
<footer class="container-fluid position-relative py-5 float-end float-sm-none">
        <div class="w-100 h-100 pattern-footer position-absolute top-0 end-0"></div>
        <div class="container">
            <div class="row position-relative pt-5">
                <div class="col-md-6 mx-auto text-center">
                    <h2 class="text-white text-bold mb-5">با ما تماس بگیرید.</h2>
                    <p class="text-secondary">ایران، مشهد، خیابان لورم، پلاک000</p>
                    <p class="text-secondary text-bold">تلفن: <b class="text-info">05130000000</b></p>
                    <p class="text-secondary text-bold">ایمیل: <b class="text-info">asiehdavary@yahoo.com</b></p>
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-between mx-auto">
                            <div class="socialicon bg-socialicon">
                                <i class="fa-solid fa-envelope text-white"></i>
                            </div>
                            <div class="socialicon bg-socialicon">
                                <i class="fa-brands fa-google-plus-g text-white"></i>
                            </div>
                            <div class="socialicon bg-socialicon">
                                <i class="fa-brands fa-pinterest-p text-white"></i>
                            </div>
                            <div class="socialicon bg-socialicon">
                                <i class="fa-brands fa-facebook-f text-white"></i>
                            </div>
                            <div class="socialicon bg-socialicon">
                                <i class="fa-brands fa-twitter text-white"></i>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>

        </div>
        
    </footer>
    <div class="container-fluid bg-black py-4" id="footer-bottom">
        <div class="container">
            <div class="row bg-black justify-content-between">
                <div class="col-md-6 text-center text-sm-end">
                    <p class="text-white m-sm-0 m-2 text-12">Copyright@2015.All rights reserved by MountTec</p>
                </div>
            <div class="col-md-6 col-lg-4">
                <ul class="d-flex justify-content-between p-0 m-0">
                    <li class="list-unstyled"><a href="index.php" class="text-decoration-none text-white">خانه</a></li>
                    <li class="list-unstyled"><a href="register.php" target="-blank" class="text-decoration-none text-white">ثبت نام</a></li>
                    <li class="list-unstyled"><a class="text-decoration-none text-white" href="<?php echo isset($_SESSION['username']) ? 'profile.php' : 'login.php'; ?>">
                        <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'ورود'; ?></a>
                    </li>
                        <?php if(isset($_SESSION['username'])) : ?>
                    <li class="list-unstyled">
                        <a class="text-decoration-none text-white" href="logout.php">خروج</a>
                    </li>
                    <?php endif; ?>

                    
                        
                    <li class="list-unstyled"><a href="#" class="text-decoration-none text-white">تماس با ما</a></li>

                    <li class="list-unstyled">
                        <a class="text-decoration-none text-white" href="blog.php">اخبار</a>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </div>
    
    









<div class="offcanvas offcanvas-end" tabindex="-1" id="menu-phone" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">menu</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="index.php">خانه</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="register.php" target="-blank">ثبت نام</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="<?php echo isset($_SESSION['username']) ? 'profile.php' : 'login.php'; ?>">
            <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'ورود'; ?></a>
        </li>
        <?php if(isset($_SESSION['username'])) : ?>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">خروج</a>
        </li>
        <?php endif; ?>

        <li class="nav-item dropdown">
            <a class="nav-link" href="#">درباره ما</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="blog.php">اخبار</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa-solid fa-search"></i></a>
        </li>
    </ul>
</div>
<script src="./assets/js/jquery-3.7.1.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/jalali-moment.browser.js"></script>
<script src="./assets/js/main.js"></script>

    
</body>

</html>