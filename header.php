<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./assets/css/style.css" rel="stylesheet">
    <link href="./assets/css/all.min.css" rel="stylesheet">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top" data-bs-theme="dark">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#menu-phone" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse order-2 order-lg-1" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">خانه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php" target="-blank">ثبت نام</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?php echo isset($_SESSION['username']) ? 'profile.php' : 'login.php'; ?>">
                            <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'ورود'; ?>
                        </a>
                    </li>
                    <?php if(isset($_SESSION['username'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">خروج</a>
                    </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">تماس با ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">اخبار</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-search"></i></a>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand order-1 order-lg-2" href="index.php">
                <img src="./assets/img/logo.png">
            </a>
        </div>
    </nav>