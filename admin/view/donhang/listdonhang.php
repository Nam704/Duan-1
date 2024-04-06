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
                        <h4 class="page-title"> <?php
                                                if ($_GET["act"] != "DSdonhangfromuser") {
                                                    echo 'Danh sách đơn hàng: ' . trangthaiDH($trangthai);
                                                } elseif ($_GET["act"] == "DSdonhangfromuser") {
                                                    echo 'Danh sách đơn hàng của: ' . tenkhach($_GET['id']);
                                                }

                                                ?>
                        </h4>
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
                                    <thead>
                                        <tr>
                                            <?php
                                            if ($_GET["act"] != "DSdonhangfromuser") {
                                                $DStrangthaidon = load_alltrangthaidon();
                                                foreach ($DStrangthaidon as $ttdonhang) {
                                                    extract($ttdonhang);
                                                }
                                            } ?>

                                            <select class="btn btn-soft-primary w-100" name="trangthai"
                                                id="trangthaiSelect">
                                                <?php
    if ($_GET["act"] != "DSdonhangfromuser") {
        $DStrangthaidon = load_alltrangthaidon();
        $dem = 0;
        foreach ($DStrangthaidon as $ttdonhang) {
            extract($ttdonhang);
            $tenth = trangthaiDH($idth);
            if ($ttdonhang["idth"] == $_GET["trangthai"]) {
                $noibat = 'background-color: rgb(180, 180, 227)!important;color: white';
            } else {
                $noibat = '';
            }
            echo '<option value="' . $ttdonhang["idth"] . '" style="' . $noibat . '">' . $tenth . '</option>';
        }
    }
    ?>

                                            </select>
                                            <script>
                                            // Chuyển hướng khi chọn tùy chọn từ ComboBox
                                            document.getElementById("trangthaiSelect").addEventListener("change",
                                                function() {
                                                    var selectedOption = this.value;
                                                    if (selectedOption !== "") {
                                                        window.location.href = "./index.php?act=listdh&trangthai=" +
                                                            selectedOption;
                                                    }
                                                });
                                            </script>

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
                                            <th>Tên khách</th>
                                            <th>Ngày đặt</th>

                                            <th>Trạng thái</th>


                                            <th>SĐT</th>
                                            <th>Thanh toán</th>
                                            <th>Tổng giá</th>

                                            <th>Thao tác</th>




                                        </tr>
                                    </thead>
                                    <?php
                                    $dem = 0;
                                    foreach ($listdh as $sp) {
                                        extract($sp);
                                        ++$dem;
                                        $tenkh = tenkh($iduser);
                                        (int)$trangthai;
                                        // $trangthaikt = $trangthai + 1;
                                        $chapnhan = "./index.php?act=chapnhandh&id=" . $iddh . "&trangthai=9";
                                        $tuchoi = "./index.php?act=tuchoidh&id=" . $iddh . "&trangthai=2";

                                        $chapnhanhoandon = "./index.php?act=chapnhanhoandon&id=" . $iddh . "&trangthai=10";
                                        $chapnhanhuydon = "./index.php?act=chapnhanhuydon&id=" . $iddh . "&trangthai=12";

                                        $trangthaitt = "./index.php?act=trangthaitt&id=" . $iddh . "&trangthai=$trangthai";

                                        $tuchoihoandon = "./index.php?act=tuchoihoandon&id=" . $iddh . "&trangthai=11";

                                        $chitiet = "./index.php?act=listctdh&id=" . $iddh;
                                        $trangthaidonhang = trangthaiDH($trangthai);
                                        $PTTT = PTthanhtoan($ptthanhtoan);
                                        $tongtien = tongtientuCTDH($iddh);
                                        capnhattonggiaDH($iddh, $tongtien);
                                        if ($trangthai == 12) {
                                            $lammo = 'muted';
                                        } else {
                                            $lammo = '';
                                        }
                                        echo '<tbody>
                        <tr>
                            
                            <td class="$lammo">' . $dem . '</td>
                            <td class="$lammo">' . $tenkh . '</td>';

                                        echo '
                            <td class="$lammo">' . $ngaydh . ' </td>
                            <td class="$lammo">' . $trangthaidonhang . ' </td>
                           
                            <td class="$lammo">' . $sdt . ' </td>
                            <td class="$lammo">' . $PTTT . ' </td>
                            <td class="$lammo">' . $tongtien . ' </td>



                            <td>';
                                        if ($_GET["act"] != "DSdonhangfromuser") {
                                            if ($trangthai == 1) {
                                                echo '
                                <a href="' . $chapnhan . '">
                                <input class="btn btn-soft-primary" type="button" value="Xác nhận">
                                </a>';
                                            } elseif ($trangthai == 9) {
                                                echo '
                                            <a href="' . $chapnhan . '">
                                            <input class="btn btn-soft-primary" type="button" value="Xác nhận lại">
                                            </a>';
                                            }


                                            if ($trangthai == 1) {
                                                echo ' 
                                            <a href="' . $tuchoi . '">
                                            <input class="btn btn-soft-primary" type="button" value="Từ chối"></a> ';
                                            }
                                            // } else {
                                            if ($trangthai >= 2 && $trangthai <= 6) {
                                                echo ' <a href="' . $trangthaitt . '">
                                                    <input class="btn btn-soft-primary" type="button" value="Chuyển tiếp">
                                                    </a> ';
                                            }
                                            if ($trangthai == 7) {
                                                echo ' <a href="' . $trangthaitt . '">
                                                    <input class="btn btn-soft-primary" type="button" value="Chấp nhận hủy đơn">
                                                    </a> ';
                                            }
                                            if ($trangthai == 8) {
                                                echo ' <a href="' . $chapnhanhoandon . '">
                                                    <input class="btn btn-soft-primary" type="button" value="Chấp nhận hoàn đơn">
                                                    </a> ';
                                                echo ' <a href="' . $tuchoihoandon . '">
                                                    <input class="btn btn-soft-primary" type="button" value="Từ chối hoàn đơn">
                                                    </a> ';
                                            }
                                        }
                                        echo '
                                        <a href="' . $chitiet . '">
<input class="btn btn-soft-primary" type="button" value="Chi tiết">
 </a>
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