<div class="col-lg-3">
    <aside class="electronic_sidebar sidebar_section">
        <div class="sb_widget sb_collapse_category">
            <h3 class="sb_widget_title">All Categories</h3>
            <div id="sb_category_accordion" class="sb_category_accordion">
                <div class="card">
                    <div class="card-header">
                        <a data-toggle="collapse" href="#collapse_one">
                            Wearable Technology (84)
                        </a>
                    </div>
                    <div id="collapse_one" class="collapse !show" data-parent="#sb_category_accordion">
                        <div class="card-body p-0">
                            <ul class="ul_li_block clearfix">
                                <li><a href="#!">Lights</a></li>
                                <li><a href="#!">Raincoats</a></li>
                                <li><a href="#!">Shorts</a></li>
                                <li><a href="#!">Pants</a></li>
                                <li><a href="#!">Shirts</a></li>
                                <li><a href="#!">Tires</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="sb_widget sb_pricing_range">
            <h3 class="sb_widget_title text-uppercase">Filters</h3>
            <form action="#">
                <div class="price-range-area clearfix">
                    <div id="slider-range" class="slider-range"></div>
                    <div class="price-text d-flex align-items-center">
                        <span>Price:</span>
                        <input type="text" readonly value="<?php
                                                            $maxgiasp = giaspallmax();
                                                            $mingiasp = giaspallmin();
                                                            echo $mingiasp . " VNĐ - " . $maxgiasp . " VNĐ";
                                                            ?> ">
                    </div>
                </div>
            </form>
        </div>

        <div class="sb_widget sb_color_checkbox">
            <h3 class="sb_widget_title text-uppercase">Nhà sản xuất</h3>
            <form action="#">
                <ul class="ul_li_block clearfix">

                    <?php
                    foreach ($listnsx as $nsx) {
                        extract($nsx);
                        echo '
                                        <li>
                                        <div class="checkbox_item">
                                            <input id="oculus_rift_checkbox"  type="checkbox" >
                                            <label value="' . $idnsx . '" >' . $tennsx . '</label>
                                        </div>
                                    </li>
                                        ';
                        // echo '<option   > '  . $tennsx .  ' </option>';
                    }
                    ?>



                </ul>
            </form>
        </div>

        <div class="sb_widget sb_color_checkbox">
            <h3 class="sb_widget_title text-uppercase">Màu sản phẩm</h3>
            <form action="#">
                <ul class="ul_li_block clearfix">

                    <?php
                    foreach ($listmsp as $msp) {
                        extract($msp);
                        echo '
<li>
                        <div class="checkbox_item">
                            <input id="black_color_checkbox" type="checkbox" >
                            <label value="' . $idmsp . '" for="black_color_checkbox">' . $tenmausp . '</label>
                        </div>
                    </li>
';
                        //    echo '<option  value="' . $idnsx . '" > '  . $tennsx .  ' </option>';
                    }
                    ?>



                </ul>
            </form>
        </div>
    </aside>
</div>