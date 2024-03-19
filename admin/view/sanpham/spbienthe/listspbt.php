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
                                    <form action="index.php?act=listsp" method="post">
                                        <input type="text" name="kyw" style="width: 20%;float:left">
                                        <select name="idnsx" id="" style="float:left; width: 15%;margin-bottom: 10px;font-size: 20px;">
                                            <option value="0" selected>All</option>
                                            <?php
                                            foreach ($listnsx as $nsx) {
                                                extract($nsx);
                                                echo '<option  value="' . $idnsx . '">' . $idnsx . ' - ' . $tennsx . '</option>';
                                            }
                                            ?>
                                        </select>
                                        <input type="submit" name="listok" value="Go" style="float: left; width:10%">
                                    </form>

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
                                            <th>ID SP</th>
                                            <th>ID NSX</th>
                                            <th>Phân loại </th>
                                            <th>ID ưu đãi </th>

                                            <th>Tên sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Số lượng tồn kho</th>
                                            <th>Hình</th>
                                            <th>Mô tả</th>
                                            <th>Thao tác</th>




                                        </tr>
                                    </thead>
                                    <?php
                                    foreach ($listsp as $sp) {
                                        extract($sp);
                                        $hinhpath = "../../upload/" . $hinh;
                                        if (is_file($hinhpath)) {
                                            $hinhsp = "<img src='" . $hinhpath . "' width='100' height='80'>";
                                        } else {
                                            $hinhsp = "no photo";
                                        }
                                        $suauser = "./index.php?act=suasp&id=" . $idsp;
                                        $xoauser = "./index.php?act=xoasp&id=" . $idsp;

                                        echo '<tbody>
                        <tr>
                            
                            <td>' . $idsp . '</td>
                            <td>' . $idnsx . '</td>

                            <td>' . $idpl . ' </td>
                            <td>' . $idud . ' </td>
                            <td>' . $tensp . ' </td>
                            <td>' . $giasp . ' </td>
                            <td>' . $soluongtk . ' </td>
                            <td>' . $hinhsp . ' </td>
                            <td>' . $mota . ' </td>



                            <td>
                            <a href="' . $suauser . '">Sửa  |  </a>
                            <a href="' . $xoauser . '">Xóa</a>

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