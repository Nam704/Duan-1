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
                                            <th>ID SPBT</th>
                                            <th>ID idsp</th>

                                            <th>ID Màu</th>
                                            <th>ID BNSP </th>
                                            <th>Giá </th>

                                            <th>Số lượng</th>


                                            <th>Hình</th>

                                            <th>Thao tác</th>




                                        </tr>
                                    </thead>
                                    <?php
                                    foreach ($listspbt as $spbt) {
                                        extract($spbt);
                                        $tenmsp = tenmsp($idmsp);
                                        $tenbn = tenbnsp($idbnsp);
                                        $hinhpath = "../../upload/" . $hinh;
                                        if (is_file($hinhpath)) {
                                            $hinhsp = "<img src='" . $hinhpath . "' width='100' height='80'>";
                                        } else {
                                            $hinhsp = "no photo";
                                        }
                                        $suauser = "./index.php?act=suaspbt&id=" . $idspbt;
                                        $xoauser = "./index.php?act=xoaspbt&id=" . $idspbt;
                                        // $themspbt = "./index.php?act=themspbt&id=" . $idspbt;

                                        echo '<tbody>
        <tr>
            <td>' . $idspbt . '</td>
            <td>' . $idsp . '</td>

            <td>' . $tenmsp . '</td>';

                                        echo '
            <td>' . $tenbn . ' GB</td>
            <td>' . $gia . ' </td>
            
            <td>' . $soluong . ' </td>
            <td>' . $hinhsp . ' </td>
           
            <td>
            <a href="' . $suauser . '">Sửa  |  </a>
            <a href="' . $xoauser . '">Xóa  </a>';


                                        echo '</td>
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