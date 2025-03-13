<?php
$link = $_SERVER['PHP_SELF'];
$link_array = explode('/', $link);
$page = end($link_array);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Air Conditioner</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>

    <header class="header_section">
        <div class="header_top">
            <div class="container-fluid">
                <div class="contact_nav">
                    <a href="">
                        <i class="bi bi-telephone-fill" aria-hidden="true"></i>
                        <span>
                            Call : +91 70114 48679
                        </span>
                    </a>
                    <a href="">
                        <i class="bi bi-envelope" aria-hidden="true"></i>
                        <span>
                            Email : zubair@gmail.com
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="header_bottom" id="<?php
                                            if ($page === 'index.php') {
                                                echo 'white-bg';
                                            } ?>">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <img src="images/logo.png" alt="">
                        <span>
                            Bright AirConditioner
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="s-1"> </span>
                        <span class="s-2"> </span>
                        <span class="s-3"> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav">

                                <li class="nav-item <?php
                                            if ($page === 'index.php') {
                                                echo 'active';
                                            } ?>">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item <?php
                                            if ($page === 'about.php') {
                                                echo 'active';
                                            } ?>">
                                    <a class="nav-link" href="about.php">About Us</a>
                                </li>
                                <li class="nav-item <?php
                                            if ($page === 'services.php') {
                                                echo 'active';
                                            } ?>">
                                    <a class="nav-link" href="services.php">Our Service</a>
                                </li>
                                <li class="nav-item <?php
                                            if ($page === 'contact.php') {
                                                echo 'active';
                                            } ?>">
                                    <a class="nav-link" href="contact.php">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    </header>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>