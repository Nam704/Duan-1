<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.jthemes.net/themes/html/neoncart/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Mar 2024 16:58:58 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Login Page - Neoncart HTML5 Template</title>
    <link rel="shortcut icon" href="../assets/images/logo/favourite_icon_01.png">

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

    <!-- icon - css include -->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">

    <!-- nice select - css include -->
    <link rel="stylesheet" type="text/css" href="../assets/css/nice-select.css">

    <!-- carousel - css include -->
    <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/slick-theme.css">

    <!-- popup images & videos - css include -->
    <link rel="stylesheet" type="text/css" href="../assets/css/magnific-popup.css">

    <!-- jquery ui - css include -->
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery-ui.css">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

</head>


<body>


    <!-- backtotop - start -->
    <div id="thetop"></div>
    <div class="backtotop bg_default_red">
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
    <header class="header_section default_header sticky_header clearfix">
        <div class="header_top text-white" data-bg-color="#000000">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <p class="mb-0">Free Shipping on Domestic Orders over $150</p>
                    </div>

                    <div class="col-lg-5">
                        <ul class="primary_social_links ul_li_right clearfix">
                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#!"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="header_bottom clearfix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="brand_logo">
                            <a class="brand_link" href="index.html">
                                <img src="../assets/images/logo/logo_27_1x.png" srcset="../assets/images/logo/logo_27_2x.png 2x" alt="logo_not_found">
                            </a>


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

        <!-- sidebar mobile menu & sidebar cart - end
			================================================== -->


        <!-- breadcrumb_section - start
			================================================== -->
        <section class="breadcrumb_section text-white text-center text-uppercase d-flex align-items-end clearfix" data-background="../assets/images/breadcrumb/bg_01.jpg">
            <div class="overlay" data-bg-color="#1d1d1d"></div>
            <div class="container">
                <h1 class="page_title text-white">Login Page</h1>
                <ul class="breadcrumb_nav ul_li_center clearfix">
                    <li><a href="../index.php">Trang chủ</a></li>
                    <li><a href="dangnhap.php">Đăng nhập</a></li>
                    <li><a href="dangki.php">Đăng kí</a></li>
                </ul>
            </div>
        </section>
        <!-- breadcrumb_section - end
			================================================== -->


        <!-- register_section - start
			================================================== -->
        <section class="register_section sec_ptb_140 has_overlay parallaxie clearfix" data-background="../assets/images/backgrounds/bg_22.jpg">
            <div class="overlay" data-bg-color="rgba(55, 55, 55, 0.75)"></div>
            <div class="container">
                <div class="reg_form_wrap login_form" data-background="../assets/images/reg_bg_01.png">
                    <form action="../index.php?act=login" method="post">
                        <div class="reg_form">
                            <h2 class="form_title text-uppercase text-center">Login</h2>
                            <?php
                            if (isset($_SESSION['thongbao'])) {
                                if ($_SESSION['thongbao'] != "") {
                                    echo '<h6 class=" text-warning text-center">' . $_SESSION['thongbao'] . ' </h6>';
                                }
                            }

                            ?>

                            <div class="form_item">
                                <input id="username_input" type="text" name="username" placeholder="username">
                                <label for="username_input"><i class="fal fa-user"></i></label>
                            </div>
                            <div class="form_item">
                                <input id="password_input" type="password" name="password" placeholder="password">
                                <label for="password_input"><i class="fal fa-unlock-alt"></i></label>
                            </div>
                            <a class="forget_pass text-uppercase mb_30" href="#!">Forgot password?</a>
                            <button type="submit" name="login" class="custom_btn bg_default_red text-uppercase mb_50">Login</button>

                            <div class="social_wrap mb_100">
                                <h4 class="small_title_text mb_15 text-center text-uppercase">Or Login With</h4>
                                <ul class="circle_social_links ul_li_center clearfix">
                                    <li><a data-bg-color="#3b5998" href="#!"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li><a data-bg-color="#1da1f2" href="#!"><i class="fab fa-twitter"></i></a></li>
                                    <li><a data-bg-color="#ea4335" href="#!"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="create_account text-center">
                                <h4 class="small_title_text text-center text-uppercase">Have not account yet?</h4>
                                <a class="create_account_btn text-uppercase" href="dangki.php">Sign Up</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- register_section - end
			================================================== -->


    </main>
    <!-- main body - end
		================================================== -->


    <!-- footer_section - start
		================================================== -->
    <footer class="footer_section default_footer clearfix">
        <div class="footer_widget_area sec_ptb_100 clearfix" data-bg-color="#1f1f1f">
            <div class="container">
                <div class="row justify-content-lg-between">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="footer_widget df_about_area">
                            <div class="brand_logo mb_30">
                                <a href="index.html">
                                    <img src="../assets/images/logo/logo_28_1x.png" srcset="../assets/images/logo/logo_28_2x.png 2x" alt="logo_not_found">
                                </a>
                            </div>

                            <p class="mb_15">
                                We’ve completed 1000+ demo site for more than one million of our customers.
                            </p>

                            <ul class="df_contact_info ul_li_block clearfix">
                                <li><i class="fas fa-phone-alt"></i> 001-6688-9999</li>
                                <li><i class="fas fa-envelope"></i> contact@site.com</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="footer_widget product_list clearfix">
                            <h3 class="df_widget_title text-white text-uppercase">Hot Products</h3>
                            <ul class="ul_li_block">
                                <li>
                                    <div class="small_product">
                                        <div class="item_image">
                                            <img src="../assets/images/shop/minimal/img_10.jpg" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <h3 class="item_title">
                                                <a class="text-white" href="#!">
                                                    Lobortis Laculis ut Condimentum
                                                </a>
                                            </h3>
                                            <span class="item_price">$110.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="small_product">
                                        <div class="item_image">
                                            <img src="../assets/images/shop/minimal/img_11.jpg" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <h3 class="item_title">
                                                <a class="text-white" href="#!">
                                                    Lobortis Laculis ut Condimentum
                                                </a>
                                            </h3>
                                            <span class="item_price">$110.00</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="footer_widget product_list clearfix">
                            <h3 class="df_widget_title text-white text-uppercase">Sale Products</h3>
                            <ul class="ul_li_block">
                                <li>
                                    <div class="small_product">
                                        <div class="item_image">
                                            <img src="../assets/images/shop/minimal/img_12.jpg" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <h3 class="item_title">
                                                <a class="text-white" href="#!">
                                                    Lobortis Laculis ut Condimentum
                                                </a>
                                            </h3>
                                            <span class="item_price">$110.00</span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="small_product">
                                        <div class="item_image">
                                            <img src="../assets/images/shop/minimal/img_13.jpg" alt="image_not_found">
                                        </div>
                                        <div class="item_content">
                                            <h3 class="item_title">
                                                <a class="text-white" href="#!">
                                                    Lobortis Laculis ut Condimentum
                                                </a>
                                            </h3>
                                            <span class="item_price">$110.00</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="footer_widget df_newsletter">
                            <h3 class="df_widget_title text-white text-uppercase">Newsletter</h3>
                            <p class="mb_30">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex tortor
                            </p>
                            <form action="#">
                                <div class="form_item mb-0">
                                    <input type="email" name="email" placeholder="Email Address">
                                    <button type="submit" class="submit_btn"><i class="fal fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_bottom clearfix" data-bg-color="#1a1a1a">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <p class="copyright_text mb-0">
                            @2021 Designed By <a href="#!" class="author_link text-white">jthemes</a>.
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <ul class="circle_social_links ul_li_right clearfix">
                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#!"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_section - end
		================================================== -->


    <!-- fraimwork - jquery include -->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- mobile menu - jquery include -->
    <script src="../assets/js/mCustomScrollbar.js"></script>

    <!-- google map - jquery include -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&amp;ver=2.1.6">
    </script>
    <script src="../assets/js/gmaps.min.js"></script>

    <!-- animation - jquery include -->
    <script src="../assets/js/parallaxie.js"></script>
    <script src="../assets/js/wow.min.js"></script>

    <!-- nice select - jquery include -->
    <script src="../assets/js/nice-select.min.js"></script>

    <!-- carousel - jquery include -->
    <script src="../assets/js/slick.min.js"></script>

    <!-- countdown timer - jquery include -->
    <script src="../assets/js/countdown.js"></script>

    <!-- popup images & videos - jquery include -->
    <script src="../assets/js/magnific-popup.min.js"></script>

    <!-- filtering & masonry layout - jquery include -->
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/masonry.pkgd.min.js"></script>
    <script src="../assets/js/imagesloaded.pkgd.min.js"></script>

    <!-- jquery ui - jquery include -->
    <script src="../assets/js/jquery-ui.js"></script>

    <!-- custom - jquery include -->
    <script src="../assets/js/custom.js"></script>


</body>

<!-- Mirrored from www.jthemes.net/themes/html/neoncart/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Mar 2024 16:58:58 GMT -->

</html>