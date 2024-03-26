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
                        <h4 class="page-title">Editable Table</h4>
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

                                    <a href="./index.php?act=thembttheosp&id=<?= $idsp ?>">
                                        <input class="btn btn-soft-primary w-100" type="button" value="Thêm mới biến thể">

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
                            <h4 class="header-title mb-4">
                                Các biến thể của:
                            </h4>
                            <a style="font-size: 16px;" href="index.php?act=chitietsp&id=<?= $idsp ?>"><?= $tensp ?></a>
                            <div class="table-responsive">
                                <table class="table table-centered mb-0 table-nowrap" id="inline-editable">
                                    <thead>
                                        <tr>
                                            <th>STT</th>


                                            <th>Màu Sản phẩm</th>
                                            <th>Bộ nhớ</th>
                                            <th>Giá </th>

                                            <th>Số lượng</th>


                                            <!-- <th>Hình</th> -->

                                            <th>Thao tác</th>




                                        </tr>
                                    </thead>
                                    <?php
                                    $dem = 0;
                                    foreach ($listspbt as $spbt) {
                                        extract($spbt);
                                        ++$dem;
                                        $tenmsp = tenmsp($idmsp);
                                        $tenbn = tenbnsp($idbnsp);
                                        // $hinhpath = "../../upload/" . $hinh;
                                        // if (is_file($hinhpath)) {
                                        //     $hinhsp = "<img src='" . $hinhpath . "' width='100' height='80'>";
                                        // } else {
                                        //     $hinhsp = "no photo";
                                        // }
                                        $suauser = "./index.php?act=suaspbt&id=" . $idspbt;
                                        $xoauser = "./index.php?act=khoaspbt&id=" . $idspbt;
                                        $mokhoa = "./index.php?act=mokhoaspbt&id=" . $idspbt;
                                        if ($trangthai == 1) {
                                            $lammo = 'muted';
                                        } else {
                                            $lammo = '';
                                        }
                                        // $themspbt = "./index.php?act=themspbt&id=" . $idspbt;

                                        echo '<tbody>
        <tr>
            <td class="' . $lammo . '">' . $dem . '</td>
            

            <td class="' . $lammo . '">' . $tenmsp . '</td>';

                                        echo '
            <td class="' . $lammo . '">' . $tenbn . ' GB</td>
            <td class="' . $lammo . '">' . $gia . ' </td>
            
            <td class="' . $lammo . '">' . $soluong . ' </td>';

                                        echo '
           
            <td>
            <a href="' . $suauser . '">
            
                            <input class="btn btn-soft-primary" type="button" value="Sửa">
                            </a>';
                                        if ($trangthai == 0) {
                                            echo '<a href="' . $xoauser . '">
                                <input class="btn btn-soft-primary" type="button" value="Khóa">
                                </a>';
                                            # code...
                                        } elseif ($trangthai == 1) {
                                            # code...
                                            echo ' <a href="' . $mokhoa . '">
                                <input class="btn btn-soft-primary" type="button" value="Mỏ khóa">
                                </a>';
                                        }

                                        echo '       

            </td>
        </tr>
    </tbody>';
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