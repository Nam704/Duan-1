<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jthemes.net/themes/html/neoncart/electronic_shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2024 09:54:19 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Electronic Shop- Neoncart HTML5 Template</title>
    <link rel="shortcut icon" href="assets/images/logo/favourite_icon_01.png">

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!-- icon - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

    <!-- nice select - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/nice-select.css">

    <!-- carousel - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

    <!-- popup images & videos - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>


<body class="home_electronic bg-white">


    <!-- backtotop - start -->
    <div id="thetop"></div>
    <div class="backtotop bg_electronic_blue">
        <a href="#" class="scroll">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->

    <!-- preloader - start -->
    <!-- <div id="preloader"></div> -->
    <!-- preloader - end -->


    <!-- header_section - start
		================================================== -->
    <header class="header_section electronic_header clearfix">
        <div class="header_advertisement">
            <img src="assets/images/offer/electronic/img_01.png" alt="image_not_found">
        </div>
        <div class="header_top clearfix">
            <div class="container maxw_1600">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="brand_logo">
                            <a class="brand_link" href="index.php">
                                <img src="assets/images/logo/logo_16_1x.png" alt="logo_not_found">
                            </a>


                        </div>
                    </div>
                    <!-- Timkhiem -->
                    <div class="col-lg-6">
                        <form action="index.php?act=timkiemsp" method="post">
                            <div class="medical_search_bar">
                                <div class="form_item">
                                    <input type="text" name="kyw" placeholder="search here...">
                                </div>
                                <div class="option_select">

                                    <select name="idnsx" class="form-control">
                                        <?php
                                        foreach ($listnsx as $nsx) {
                                            extract($nsx);

                                            echo '<option  value="' . $idnsx . '" > '  . $tennsx .  ' </option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <input type="hidden" name="act" value="timkiemsp">
                                <button type="submit" name="timkiem" class="submit_btn">
                                    <i class="fal fa-search"></i></button>
                                <!-- <input type="submit" name="Test" value="Gửi"> -->
                            </div>
                        </form>



                    </div>

                    <div class="col-lg-3">
                        <ul class=" electronic_action_btns ul_li_right clearfix">
                            <li>
                                <a class="mobile_menu_btn" href="#">
                                    <i class="fas fa-user"></i>
                                    <span><?php
                                            if (isset($_SESSION['user'])) {
                                                echo $_SESSION['user']['tenuser'];
                                                // var_dump($_SESSION['user']);
                                            } else echo "Login";
                                            ?></span>
                                </a>
                            </li>
                            <li>
                                <button type="button" class="cart_btn">
                                    <span class="counter">2</span>
                                    <i class="fas fa-shopping-cart"></i>
                                    <span>Cart</span>
                                </button>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="search_body_collapse" class="search_body_collapse collapse">
            <div class="search_body">
                <div class="container-fluid prl_90">
                    <form action="#">
                        <div class="form_item mb-0">
                            <input type="search" name="search" placeholder="Type here...">
                            <button type="submit"><i class="fal fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="header_bottom bg_gray clearfix">
            <div class="container maxw_1600">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <nav class="main_menu clearfix">
                            <ul class="ul_li text-uppercase clearfix">
                                <li><a href="#!">Sản phẩm mới</a></li>
                                <li><a href="#!">Sản phẩm bán chạy</a></li>
                                <li><a href="#!">Sản phẩm giảm giá</a></li>
                                <!-- <li><a href="#!">Logitech Sale</a></li>
                                <li><a href="#!">Headphones Sale</a></li> -->
                            </ul>
                        </nav>
                    </div>

                    <div class="col-lg-4 d-flex align-items-center justify-content-lg-end">
                        <div class="black_friday text-center">
                            <h3 class="text-uppercase">BLACK FRIDAY</h3>
                            <span>Get 45% off!</span>
                        </div>
                        <div class="language_select option_select">
                            <select>
                                <option data-display="Language Select">Select A Option</option>
                                <option value="1" selected>English</option>
                                <option value="2">Franch</option>
                                <option value="3" disabled>portuguese</option>
                                <option value="4">Spanish</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header_section - end
		================================================== -->


    <!-- main body - start
		================================================== -->
    <main>


        <!-- sidebar mobile menu & sidebar cart - start
			================================================== -->
        <?php include "box_right_cart.php" ?>