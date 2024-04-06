<style>
    .selected-size {
        border: 2px solid #ffa500;
        /* Màu sắc đã chọn */
        /* color: white; */
        /* Màu chữ */
    }

    .selected-color {
        border: 2px solid #ffa500;
        /* Viền màu sắc đã chọn */
    }
</style>
<?php

?>
<!-- breadcrumb_section - start
			================================================== -->
<div class="container maxw_1600">
    <div class="f2_breadcrumb_nav_wrap mt-0 sec_ptb_50">
        <ul class="ce_breadcrumb_nav ul_li clearfix">
            <li><a href="#!">Home</a></li>
            <li>Shop</li>
            <li>Electronic</li>
            <li>Shop Details</li>
        </ul>
    </div>
</div>
<!-- breadcrumb_section - end
			================================================== -->




<!-- electronic_details - start
			================================================== -->
<section class="electronic_details clearfix">
    <div class="container maxw_1600">
        <div class="row mb_100 justify-content-lg-between justify-content-md-center">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="shop_details_image">
                    <div class="tab-content zoom-gallery">
                        <?php
                        $dem = 0;
                        foreach ($listimgsp as $tenimg) {
                            extract($tenimg);
                            ++$dem;
                            if ($dem == 1) {
                                $tab = 'active';
                            } else {
                                $tab = 'fade';
                            }
                            if ($dem <= 4) {
                                # code...

                                $url_image = "../upload/" . $tenimg["img_name"];
                                if ($dem % 2 != 0) {

                                    $a_star = '<a class="popup_image" href="' . $url_image . '">';
                                    $a_end = '</a>';
                                } else {
                                    $a_end = '';
                                    $a_star = '';
                                }
                                echo '<div id="tab_' . $dem . '" class="tab-pane ' . $tab . '">
                        ' . $a_star . '
                            <img src="' . $url_image . '" alt="image_not_found">
                        ' . $a_end . ' </div>';
                            }
                        }
                        ?>
                    </div>


                    <ul class="nav ul_li clearfix" role="tablist">
                        <?php
                        $dem = 0;
                        foreach ($listimgsp as $tenimg) {
                            extract($tenimg);
                            ++$dem;

                            if ($dem <= 4) {
                                # code...
                                $url_image = "../upload/" . $tenimg["img_name"];
                                echo '<li>
                        <a  data-toggle="tab" href="#tab_' . $dem . '">
                            <img src="' . $url_image . '" alt="image_not_found">
                        </a>
                                </li>';
                            }
                        }
                        ?>

                    </ul>
                </div>
            </div>

            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <div class="shop_details_content">
                    <h2 class="item_title"><?= $tensp ?></h2>
                    <span id="giaspbt" class="item_price"><?= giaspmin($idsp) ?> VNĐ – <?= giaspmax($idsp) ?> VNĐ</span>
                    <hr>
                    <div class="row mb_30 align-items-center justify-content-lg-between">
                        <div class="col-lg-5">
                            <div class="item_brand d-flex align-items-center">
                                <span class="brand_title">Brands:</span>
                                <span class="brand_image d-flex align-items-center justify-content-center" data-bg-color="#f7f7f7">
                                    <?= tennsx($idnsx) ?>
                                    <!-- <img src="assets/images/product_brands/img_01.png" alt="image_not_found"> -->
                                </span>
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="rating_review_wrap d-flex align-items-center clearfix">
                                <ul class="rating_star ul_li">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                                <span>4 Review(s)</span>
                                <button type="button" class="add_review_btn">Add Your Review</button>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="item_color_list mb_30 clearfix">
                        <h4 class="list_title mb_15 text-uppercase">Color</h4>
                        <ul class="ul_li clearfix">
                            <?php
                            foreach ($listmsp as $msp) {
                                extract($msp);
                                $tenmsp = tenmsp($msp["idmsp"]);
                                echo '<li> <span>
                                <input type="radio" id="option1" name="options" value="' . $idmsp . '"> </span>
                                ' . $tenmsp . '
                            </li>';
                            }
                            ?>
                            <!-- <input type="checkbox" id="option1" name="options" value="option1">
                            <label for="option1">Option 1</label>
                            <button type="radio"><span></span>
                                </button> -->

                        </ul>
                    </div>
                    <div class="item_size_list mb_30 clearfix">
                        <h4 class="list_title mb_15 text-uppercase">Size</h4>
                        <ul class="ul_li clearfix">

                            <?php
                            foreach ($listbnsp as $bnsp) {
                                extract($bnsp);
                                $kichthuoc = tenbnsp($bnsp["idbnsp"]);
                                echo '<li> <span>
                                <input type="radio" id="option2" name="option2" value="' . $idbnsp . '"> </span>
                                ' . $kichthuoc . '
                            </li>';
                            }
                            ?>
                            <!-- <li><a class="size_guide" href="#!"><i class="far fa-tape mr-1"></i> </a></li> -->

                        </ul>
                    </div>

                    <ul class="btns_group_1 ul_li mb_30 clearfix">
                        <li>
                            <div class="quantity_input">
                                <form action="#">
                                    <span class="input_number_decrement">–</span>
                                    <input class="input_number" type="text" value="1">
                                    <span class="input_number_increment">+</span>
                                </form>
                            </div>
                        </li>
                        <li>
                            <a class="custom_btn bg_black text-uppercase" href="index.php?act=addtocart"><i class="fal fa-shopping-bag mr-2"></i> Add To Cart</a>
                        </li>

                        <li>
                            <a class="custom_btn bg_black text-uppercase" href="index.php?act=muahang"><i class="fal fa-shopping-bag mr-2"></i> Mua Ngay</a>
                        </li>
                    </ul>

                    <!-- <ul class="btns_group_2 ul_li clearfix">
                        <li><a href="#!"><span><i class="far fa-heart"></i></span> Add to Wishlist</a></li>
                        <li><a href="#!"><span><i class="fal fa-repeat"></i></span> Compare</a></li>
                    </ul> -->

                    <hr>

                    <ul class="product_info ul_li_block clearfix">
                        <li><strong>SKU:</strong> U2012</li>
                        <li><strong>Categories:</strong> <a href="#!">Dress</a> <a href="#!">Handbag</a> <a href="#!">T-Shirts</a></li>
                        <li><strong>Tags:</strong> <a href="#!">Hot</a> <a href="#!">Women</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="electronic_details_description">
            <ul class="nav ul_li bg_electronic_blue" role="tablist">
                <li>
                    <a class="active" data-toggle="tab" href="#accesories_tab">Accesories</a>
                </li>

                <li>
                    <a data-toggle="tab" href="#reviews_tab">Reviews</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="accesories_tab" class="tab-pane active">
                    <h4 class="title_text mb_15">Perfectly Done</h4>
                    <p class="mb_30">
                        <?= $mota ?>
                    </p>
                </div>
                <div id="reviews_tab" class="tab-pane fade">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form_item">
                                    <input type="text" name="name" placeholder="Your Name">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form_item">
                                    <input type="email" name="email" placeholder="Your Email">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form_item">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                            </div>
                        </div>

                        <div class="form_item">
                            <textarea name="message" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="custom_btn bg_default_red text-uppercase">Submit
                            Review</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- electronic_details - end
			================================================== -->


<!-- product_section - start
			================================================== -->
<section class="product_section sec_ptb_100 clearfix">
    <div class="container maxw_1600">
        <div class="electronic_related_products position-relative">
            <h2 class="title_text mb_30">Sản phẩm cùng loại</h2>
            <div class="slideshow5_slider row" data-slick='{"dots": false}'>
                <?php
                foreach ($listspcungloai as $sanpham) {
                    extract($sanpham);
                    echo '
                        <div class="item col">
                        <div class="electronic_product_item">
                            <ul class="product_label ul_li clearfix">
                                <li>' . $idud . ' %</li>
                            </ul>
                            <div class="item_image">
                            <img src="../upload/' . $hinh . '" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <span class="item_name">' . tennsx($idnsx) . '</span>
                                <h3 class="item_title">
                                    <a href="index.php?act=ctsanpham&idsp=' . $idsp . '&idnsx=' . $idnsx . '">' . $tensp . '</a>
                                </h3>
                                <span class="item_price">' . $giasp . '</span>
                            </div>
                        </div>
                    </div>
                        ';

                    # code...
                }
                ?>



            </div>
            <div class="carousel_nav">
                <button type="button" class="left_arrow5"><i class="fal fa-angle-left"></i></button>
                <button type="button" class="right_arrow5"><i class="fal fa-angle-right"></i></button>
            </div>
        </div>
    </div>
</section>
<!-- product_section - end
			================================================== -->


</main>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var colors = document.querySelectorAll('.item_color_list input[type="radio"]');
        var sizes = document.querySelectorAll('.item_size_list input[type="radio"]');

        // Lấy giá trị idsp từ URL
        var urlParams = new URLSearchParams(window.location.search);
        var idsp = urlParams.get('idsp');



        colors.forEach(function(color) {
            color.addEventListener("change", function() {
                if (this.checked) {
                    var selectedColor = this.value;
                    var selectedSize = document.querySelector(
                        '.item_size_list input[type="radio"]:checked').value;
                    sendData(selectedColor, selectedSize, idsp); // Gửi dữ liệu màu đã chọn và idsp
                }
            });
        });

        sizes.forEach(function(size) {
            size.addEventListener("change", function() {
                if (this.checked) {
                    var selectedSize = this.value;
                    var selectedColor = document.querySelector(
                        '.item_color_list input[type="radio"]:checked').value;
                    sendData(selectedColor, selectedSize,
                        idsp); // Gửi dữ liệu kích thước đã chọn và idsp
                }
            });
        });

        function sendData(color, size, idsp) {
            // Tạo một request AJAX để gửi dữ liệu lên server
            var xhr = new XMLHttpRequest();
            var url = "request.php"; // Địa chỉ URL của file xử lý PHP
            var params = "color=" + color + "&size=" + size + "&idsp=" + idsp;
            xhr.open("POST", url, true);

            // Thiết lập header cho request
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            // Xử lý khi nhận được phản hồi từ server
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var responseData = JSON.parse(xhr.responseText);
                    // Truy cập giá trị giaspbt từ đối tượng responseData
                    var giaspbt = responseData.giaspbt;
                    console.log("Giá sản phẩm biến thể: " + giaspbt);
                    // Lấy ra phần tử có class 'item_price'
                    var itemPriceElement = document.getElementById('giaspbt');

                    // Đặt giá trị giaspbt vào phần tử
                    itemPriceElement.innerText = giaspbt + " VNĐ";
                }
            }

            // Gửi request đi với dữ liệu đã chuẩn bị
            xhr.send(params);
        }
    });
</script>