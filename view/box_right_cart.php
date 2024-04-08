<div class="sidebar-menu-wrapper">
    <div class="cart_sidebar">
        <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

        <ul class="cart_items_list ul_li_block mb_30 clearfix">
            <?php

            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            if (isset($_SESSION['listspcart'])) {
                $listspcart = $_SESSION['listspcart'];
                // var_dump($listspcart);
            } elseif (isset($_SESSION['user'])) {
                $iduser = $_SESSION['user']['iduser'];
                $idgh = return_IDgh($iduser);
                $listspcart = load_allsptronggiohang($idgh);
                // var_dump($listspcart);
            }
            // var_dump($listspcart);
            foreach ($listspcart as $sp) {
                extract($sp);
                $sanpham = loadone_sanpham($idsp);
                extract($sanpham);
                echo '<li>
                    <div class="item_image">
                        <img src="../upload/' . $hinh . '" alt="image_not_found">
                    </div>
                    <div class="item_content">
                        <h4 class="item_title">' . $sanpham['tensp'] . '</h4>
                        <span class="item_price" data-initial-price="' . $sp['giasp'] . '">' . $sp['giasp'] . ' VNĐ</span>

                    </div>

                    <button type="button" id="remove_btn" class="remove_btn"><i class="fal fa-trash-alt"></i></button>

                    <div class="quantity_input1">

                            <span class="input_number_decrement">–</span>
                            <input class="input_number" id="input_number" type="text" value="1">
                            <span class="input_number_increment">+</span>

                    </div>

                </li>';
            }






            ?>


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
            $link_login = "../view/User/dangnhap.php";
            $link_register = "../view/User/dangki.php";
            echo '<div class="msb_widget mobile_menu_list clearfix">
     <h3 class="title_text mb_15 text-uppercase"><i class="far fa-bars mr-2"></i> Menu List</h3>
     <ul class="ul_li_block clearfix">
     <li class="dropdown">
     <a href="' . $link_register . '"  >Đăng kí</a>
     <a href="' . $link_login . '"  >Đăng nhập</a>

     
 </li>

         
         <li><a href="contact.html">Conatct</a></li>
     </ul>
 </div>';
            # code...
        } elseif (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $profile = "index.php?act=profile&iduser=" . $user['iduser'];
            $settinguser = "index.php?act=settinguser&iduser=" . $user['iduser'];
            $logout = "index.php?act=logout";

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

    </div>

    <div class="overlay"></div>
</div>
<script>

</script>