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

                    <div class="col-lg-6">
                        <form action="#">
                            <div class="medical_search_bar">
                                <div class="form_item">
                                    <input type="search" name="search" placeholder="search here...">
                                </div>
                                <div class="option_select">
                                    <!-- <select>
                                        <option data-display="All Category">Select A Option</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                        <option value="3" disabled>A disabled option</option>
                                        <option value="4">Potato</option>
                                    </select> -->
                                    <select name="idnsx" class="form-control">
                                        <?php
                                        foreach ($listnsx as $nsx) {
                                            extract($nsx);

                                            echo '<option  value="' . $idnsx . '" > '  . $tennsx .  ' </option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <button type="submit" class="submit_btn"><i class="fal fa-search"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-3">
                        <ul class=" electronic_action_btns ul_li_right clearfix">
                            <li>
                                <a class="mobile_menu_btn" href="#">
                                    <i class="fas fa-user"></i>
                                    <span>Login</span>
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
                                <li><a href="#!">Super deals</a></li>
                                <li><a href="#!">Mother`s Day</a></li>
                                <li><a href="#!">Apple Week</a></li>
                                <li><a href="#!">Logitech Sale</a></li>
                                <li><a href="#!">Headphones Sale</a></li>
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
        <div class="sidebar-menu-wrapper">
            <div class="cart_sidebar">
                <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

                <ul class="cart_items_list ul_li_block mb_30 clearfix">
                    <li>
                        <div class="item_image">
                            <img src="assets/images/cart/img_01.jpg" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <h4 class="item_title">Yellow Blouse</h4>
                            <span class="item_price">$30.00</span>
                        </div>
                        <button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                    </li>
                    <li>
                        <div class="item_image">
                            <img src="assets/images/cart/img_01.jpg" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <h4 class="item_title">Yellow Blouse</h4>
                            <span class="item_price">$30.00</span>
                        </div>
                        <button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                    </li>
                    <li>
                        <div class="item_image">
                            <img src="assets/images/cart/img_01.jpg" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <h4 class="item_title">Yellow Blouse</h4>
                            <span class="item_price">$30.00</span>
                        </div>
                        <button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
                    </li>
                </ul>

                <ul class="total_price ul_li_block mb_30 clearfix">
                    <li>
                        <span>Subtotal:</span>
                        <span>$90</span>
                    </li>
                    <li>
                        <span>Vat 5%:</span>
                        <span>$4.5</span>
                    </li>
                    <li>
                        <span>Discount 20%:</span>
                        <span>- $18.9</span>
                    </li>
                    <li>
                        <span>Total:</span>
                        <span>$75.6</span>
                    </li>
                </ul>

                <ul class="btns_group ul_li_block clearfix">
                    <li><a href="shop_cart.html">View Cart</a></li>
                    <li><a href="shop_checkout.html">Checkout</a></li>
                </ul>
            </div>

            <div class="sidebar_mobile_menu">
                <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

                <div class="msb_widget brand_logo text-center">
                    <a href="index.html">
                        <img src="assets/images/logo/logo_25_1x.png" alt="logo_not_found">
                    </a>
                </div>

                <div class="msb_widget mobile_menu_list clearfix">
                    <h3 class="title_text mb_15 text-uppercase"><i class="far fa-bars mr-2"></i> Menu List</h3>
                    <ul class="ul_li_block clearfix">
                        <li class="active dropdown">
                            <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                            <ul class="ul_li_block dropdown-menu">
                                <li></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Register</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="signup.html">Sign Up</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Conatct</a></li>
                    </ul>
                </div>

                <div class="user_info">
                    <h3 class="title_text mb_30 text-uppercase"><i class="fas fa-user mr-2"></i> User Info</h3>
                    <div class="profile_info clearfix">
                        <div class="user_thumbnail">
                            <img src="assets/images/meta/img_01.png" alt="thumbnail_not_found">
                        </div>
                        <div class="user_content">
                            <h4 class="user_name">Jone Doe</h4>
                            <span class="user_title">Seller</span>
                        </div>
                    </div>
                    <ul class="settings_options ul_li_block clearfix">
                        <li><a href="#!"><i class="fal fa-user-circle"></i> Profile</a></li>
                        <li><a href="#!"><i class="fal fa-user-cog"></i> Settings</a></li>
                        <li><a href="#!"><i class="fal fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>

            <div class="overlay"></div>
        </div>