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
                            <h4 class="header-title mb-4">Trạng thái đơn</h4>
                            <div class="table-responsive">

                                <table class="table table-centered mb-0 table-nowrap" id="inline-editable">
                                    <thead>
                                        <tr>
                                            <?php $donhang = loadone_donhang($iddh);
                                            extract($donhang);
                                            echo trangthaiDH($trangthai);
                                            if ($trangthai >= 1 && $trangthai <= 6) {
                                                $trangthaitt = "./index.php?act=trangthaitt&id=" . $iddh . "&trangthai=$trangthai";
                                                echo '
                                                <td>
                                                <a href="' . $trangthaitt . '">
                                                <input class="btn btn-soft-primary w-100" type="button" value="Xác nhận và chuyển đến trạng thái tiếp theo">
                                                </a>
                                                </td>
                                                ';
                                            } elseif ($trangthai == 8) {
                                                $tuchoihoandon = "./index.php?act=tuchoihoandon&id=" . $iddh . "&trangthai=11";
                                                $chapnhanhoandon = "./index.php?act=chapnhanhoandon&id=" . $iddh . "&trangthai=12";
                                                echo '
                                                <td>
                                                <a href="' . $tuchoihoandon . '">
                                                <input class="btn btn-soft-primary w-100" type="button" value="Từ chối hoàn đơn">
                                                </a>
                                                </td>
                                                <td>
                                                <a href="' . $chapnhanhoandon . '">
                                                <input class="btn btn-soft-primary w-100" type="button" value="Chấp nhận hoàn đơn">
                                                </a>
                                                </td>';
                                            } elseif ($trangthai == 7) {
                                                $tuchoihoandon = "./index.php?act=tuchoihoandon&id=" . $iddh . "&trangthai=11";
                                                $chapnhanhoandon = "./index.php?act=chapnhanhoandon&id=" . $iddh . "&trangthai=12";
                                                echo '
                                                
                                                <td>
                                                <a href="' . $chapnhanhoandon . '">
                                                <input class="btn btn-soft-primary w-100" type="button" value="Chấp nhận hoàn đơn">
                                                </a>
                                                </td>';
                                            }



                                            ?>
                                        </tr>
                                    </thead>
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
                            <h4 class="header-title mb-4">Inline edit</h4>
                            <div class="table-responsive">
                                <table class="table table-centered mb-0 table-nowrap" id="inline-editable">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <!-- <th>ID GH</th> -->
                                            <!-- <th>Mã ĐH</th> -->

                                            <th>Tên sản phẩm</th>
                                            <th>Giá sản phẩm </th>

                                            <th>Số lượng</th>
                                            <th>Tổng giá</th>

                                            <!-- <th>Thao tác</th> -->




                                        </tr>
                                    </thead>
                                    <?php
                                    $dem = 0;
                                    foreach ($listctdh as $sp) {
                                        extract($sp);
                                        ++$dem;
                                        $tensp = laytensp($idsp);
                                        //<td>' . $idgh . '</td>
                                        echo '<tbody>
                                                    <tr>
                                                        
                                                        <td>' . $dem . '</td>';


                                        echo '
                                                        
                                                        <td>' . $tensp . ' </td>
                                                        <td>' . $giasp . ' </td>
                                                        <td>' . $soluong . ' </td>                           
                                                        <td>' . $tongtien . ' </td>
                                                        <td>';
                                        echo '
                                                                </td>
                                                                <td>
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
    <?php include "donhang.php"; ?>
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