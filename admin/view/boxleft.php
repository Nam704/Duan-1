<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="index.php" class="logo logo-light">
        <span class="logo-lg">
            <img src="assets/images/logo.png" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo-sm.png" alt="small logo">
        </span>
    </a>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">Danh mục quản lý</li>

            <li class="side-nav-item">
                <a href="index.php" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span class="badge bg-success float-end">9+</span>
                    <span> Trang chủ </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a class="side-nav-link" href="index.php?act=listdh&trangthai=1">
                    <i class="ri-group-2-line"></i>
                    <span> Đơn hàng </span>


                    <span class="menu-arrow"></span>
                </a>

            </li>

            <li class="side-nav-item">
                <a class="side-nav-link" href="index.php?act=listuser">
                    <i class="ri-group-2-line"></i>
                    <span> Người dùng </span>


                    <span class="menu-arrow"></span>
                </a>

            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                    <i class="ri-layout-line"></i>
                    <span> Sản phẩm </span>
                    <span class="menu-arrow"></span>

                </a>
                <div class="collapse" id="sidebarLayouts">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="index.php?act=listsp">Sản phẩm đang bán</a>
                        </li>
                        <li>
                            <a href="index.php?act=listspdb">Sản phẩm dừng bán</a>
                        </li>


                    </ul>
                </div>
            </li>



            <li class="side-nav-item">
                <a class="side-nav-link" href="index.php?act=listnsx">
                    <i class="ri-group-2-line"></i>
                    <span> Nhà sản xuất </span>


                    <span class="menu-arrow"></span>
                </a>

            </li>

            <li class="side-nav-item">
                <a class="side-nav-link" href="index.php?act=listbnsp">
                    <i class="ri-group-2-line"></i>
                    <span> Bộ nhớ sản phẩm </span>


                    <span class="menu-arrow"></span>
                </a>

            </li>


            <li class="side-nav-item">
                <a class="side-nav-link" href="index.php?act=listmausp">
                    <i class="ri-group-2-line"></i>
                    <span> Màu sản phẩm </span>


                    <span class="menu-arrow"></span>
                </a>

            </li>


            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link">
                    <i class="ri-donut-chart-fill"></i>
                    <span> Thống kê </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarCharts">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="charts-apex.html">Tuần</a>
                        </li>
                        <li>
                            <a href="charts-chartjs.html">Tháng</a>
                        </li>
                        <li>
                            <a href="charts-sparklines.html">Quý</a>
                        </li>
                        <li>
                            <a href="charts-sparklines.html">Năm</a>
                        </li>
                    </ul>
                </div>
            </li>




        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- ========== Left Sidebar End ========== -->