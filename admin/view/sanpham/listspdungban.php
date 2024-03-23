<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Velonic</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Editable Table</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Sản phẩm đã dừng bán</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4"></h4>
                            <div class="table-responsive">
                                <table class="table table-centered mb-0 table-nowrap" id="inline-editable">

                                    <a href="./index.php?act=themsp">
                                        <input class="btn btn-soft-primary w-100" type="button" value="Thêm sản phẩm mới">

                                    </a>
                                </table>
                            </div>
                            <!-- end .table-responsive-->
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- <h4 class="header-title mb-4">
                                Edit table 
                            </h4> -->
                            <section class="table-responsive">
                                <form action="index.php?act=listsp" method="post">
                                    <input type="text" name="kyw" style="width: 20%;float:left">
                                    <select name="idnsx" id="" style="float:left; width: 15%;margin-bottom: 10px;padding: 0.3% ;font-size: 17px;">
                                        <option class="btn btn-soft-primary" style="font-size: 17px;" value="0" selected>All</option>
                                        <?php
                                        foreach ($listnsx as $nsx) {
                                            extract($nsx);
                                            echo '<option class="btn btn-soft-primary" style="font-size: 17px;" value="' . $idnsx . '">' . $tennsx . '</option>';
                                        }

                                        ?>
                                    </select>

                                    <input type="submit" name="listok" value="Lọc" style="float: left; width:10%">
                                </form>
                            </section>


                            <div class="table-responsive">
                                <table class="table table-centered mb-0 table-nowrap" id="inline-editable">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>NSX</th>
                                            <th>Phân loại </th>
                                            <!-- <th>ID ưu đãi </th> -->

                                            <th>Tên sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>
                                            <th>Hình đại diện</th>
                                            <th>Mô tả</th>
                                            <th>Thao tác</th>




                                        </tr>
                                    </thead>
                                    <?php
                                    $dem = 0;
                                    foreach ($listsp as $sp) {
                                        ++$dem;
                                        extract($sp);
                                        if ($trangthai == 1) {
                                            # code...

                                            $tennsx = tennsx($idnsx);
                                            $soluong = soluong($idsp);

                                            $soluongtk = 0;
                                            foreach ($soluong as $key) {
                                                $soluongtk += $key["soluong"];
                                            }

                                            $hinhpath = "../../upload/" . $hinh;
                                            if (is_file($hinhpath)) {
                                                $hinhsp = "<img src='" . $hinhpath . "' width='100' height='80'>";
                                            } else {
                                                $hinhsp = "no photo";
                                            }
                                            $suasp = "./index.php?act=suasp&id=" . $idsp;
                                            $mokhoasp = "./index.php?act=mokhoasp&id=" . $idsp;
                                            $chitietsp = "./index.php?act=chitietsp&id=" . $idsp;

                                            $thembttheosp = "./index.php?act=thembttheosp&id=" . $idsp;
                                            $hiendsbttheosp = "./index.php?act=listbtfromsp&id=" . $idsp;
                                            echo '<tr>';
                                            echo '<td>' . $dem . '</td>';
                                            echo '<td>' . $tennsx . '</td>';
                                            if ($idpl == 2) {
                                                echo '<td> <a href="' . $hiendsbttheosp . '">
                                        <input class="btn btn-soft-primary" type="button" value="Biến thể">
                                        </a> </td>';
                                            } else {
                                                echo '<td> Thường </td>';
                                            }

                                            // echo '<td>' . $idud . ' </td>';
                                            if ($idpl == 2) {
                                                echo '<td> <a href="' . $hiendsbttheosp . '">' . $tensp . '</a> </td>';
                                            } else {
                                                echo '<td> ' . $tensp . ' </td>';
                                            }
                                            echo '<td>' . $giasp . ' </td>';
                                            echo '<td>' . $soluongtk . ' </td>';
                                            if ($idpl == 2) {
                                                echo '<td> <a href="' . $hiendsbttheosp . '">' . $hinhsp . '</a> </td>';
                                            } else {
                                                echo '<td>' . $hinhsp . ' </td>';
                                            }


                                            echo '<td> <a href="' . $chitietsp . '">
                                        <input class="btn btn-soft-primary" type="button" value="Chi tiết">
                                        </a> </td>';
                                            echo '<td>';
                                            echo '<a href="' . $suasp . '">
                                        <input class="btn btn-soft-primary" type="button" value="Sửa">
                                        </a> ';
                                            echo '<a href="' . $mokhoasp . '">
                                        <input class="btn btn-soft-primary" type="button" value="Mở">
                                        </a> ';
                                            if ($idpl == 2) {

                                                echo ' <a href="' . $thembttheosp . '">
                                            <input class="btn btn-soft-primary" type="button" value="Thêm biến thể">
                                            </a> ';
                                            }
                                            echo '</td>';

                                            // if ($idpl == 2) {
                                            //     echo '<tr>';
                                            //     echo '<td colspan="9"></td>';
                                            //     echo '<td>';
                                            //     echo '<a href="' . $thembttheosp . '">Thêm biến thể | </a><br>
                                            //     <a href="' . $hiendsbttheosp . '">DS biến thể</a>';
                                            //     echo '</td>';
                                            //     echo '</tr>';
                                            // }
                                        }
                                    }
                                    ?>

                                </table>
                            </div>
                            <!-- end .table-responsive-->
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Velonic - Theme by <b>Techzaa</b>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->