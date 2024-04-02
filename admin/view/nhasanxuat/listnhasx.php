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

                                    <a href="./index.php?act=addnsx">
                                        <input class="btn btn-soft-primary w-100" type="button"
                                            value="Thêm nhà sản xuất mới">

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
                            <h4 class="header-title mb-4">Inline edit</h4>
                            <div class="table-responsive">
                                <table class="table table-centered mb-0 table-nowrap" id="inline-editable">
                                    <thead>
                                        <tr>

                                            <th>STT</th>

                                            <th>Tên nhà sản xuất</th>
                                            <th>Thao tác</th>

                                        </tr>
                                    </thead>
                                    <?php
                                    $dem = 0;
                                    foreach ($listnsx as $nsx) {
                                        ++$dem;
                                        extract($nsx);
                                        $suansx = "./index.php?act=suansx&id=" . $idnsx;
                                        $xoansx = "./index.php?act=xoansx&id=" . $idnsx;
                                        $mokhoa = "./index.php?act=mokhoansx&id=" . $idnsx;

                                        if ($trangthai == 1) {
                                            $lammo = 'muted';
                                        } else {
                                            $lammo = '';
                                        }
                                        echo '<tbody>
                        <tr>
                           
                            <td class="' . $lammo . '">' . $dem . '</td>
                            <td class="' . $lammo . '">' . $tennsx . '</td>
               
                            <td>
                            <a class="btn btn-soft-primary" href="' . $suansx . '">Sửa    </a>';
                                        if ($trangthai == 0) {
                                            echo '<a href="' . $xoansx . '">
                                        <input class="btn btn-soft-primary" type="button" value="Khóa">
                                        </a> ';
                                        } elseif ($trangthai == 1) {
                                            echo '<a href="' . $mokhoa . '">
                                            <input class="btn btn-soft-primary" type="button" value="Mở khóa">
                                            </a> ';
                                        }
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