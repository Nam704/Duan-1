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
            <li><a href="index.php?act=viewcart">View Cart</a></li>
            <li><a href="index.php?act=checkout">Checkout</a></li>
        </ul>
    </div>
    <!-- User -->
    <div class="sidebar_mobile_menu">
        <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

        <div class="msb_widget brand_logo text-center">
            <a href="index.html">
                <img src="assets/images/logo/logo_25_1x.png" alt="logo_not_found">
            </a>
        </div>
        <?php if (!isset($_SESSION['user'])) {
            echo '<div class="msb_widget mobile_menu_list clearfix">
     <h3 class="title_text mb_15 text-uppercase"><i class="far fa-bars mr-2"></i> Menu List</h3>
     <ul class="ul_li_block clearfix">
         

         <li class="dropdown">
             <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
             <ul class="dropdown-menu">
                 <li class="dropdown">
                     <a href="#!"  >Đăng kí</a>
                     <a href="#!"  >Đăng nhập</a>

                     
                 </li>
             </ul>
         </li>
         <li><a href="contact.html">Conatct</a></li>
     </ul>
 </div>';
            # code...
        } elseif (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $profile = "index.php?act=profile&iduser=" . $user['iduser'];
            $settinguser = "index.php?act=settinguser&iduser=" . $user['iduser'];
            $logout = "./User/dangnhap.php";

            echo '<div class="user_info">
    <h3 class="title_text mb_30 text-uppercase"><i class="fas fa-user mr-2"></i> User Info</h3>
    <div class="profile_info clearfix">
        <div class="user_thumbnail">
            <img src="assets/images/meta/img_01.png" alt="thumbnail_not_found">
        </div>
        <div class="user_content">
            <h4 class="user_name">' . $user['tenuser'] . '</h4>
            <span class="user_title">Seller</span>
        </div>
    </div>
    <ul class="settings_options ul_li_block clearfix">
        <li><a href="' . $profile . '"><i class="fal fa-user-circle"></i> Profile</a></li>
        <li><a href="' . $settinguser . '"><i class="fal fa-user-cog"></i> Settings</a></li>
        <li><a href="' . $logout . '"><i class="fal fa-sign-out-alt"></i> Logout</a></li>
    </ul>
</div>';
        } ?>
        <!-- <div class="msb_widget mobile_menu_list clearfix">
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
                            <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Register</a>
                            <ul class="dropdown-menu">
                                <li><a href="login.html">Login</a></li>
                                <li><a href="signup.html">Sign Up</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="contact.html">Conatct</a></li>
            </ul>
        </div> -->

        <!-- <div class="user_info">
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
        </div> -->
    </div>

    <div class="overlay"></div>
</div>