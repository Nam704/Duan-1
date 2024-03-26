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

                                            <th>Tên sản phẩm</th>
                                            <th>Tên nhà sản xuất</th>
                                            <th>Phân loại </th>
                                            <th>Hình</th>



                                        </tr>
                                    </thead>
                                    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                                        <tbody>
                                            <tr>

                                                <input type="hidden" name="idsp" value="<?= $idsp ?>">
                                                <td>
                                                    <input class="form-control" type="text" name="tensp" placeholder="<?= $tensp ?>" value="<?= $tensp ?>">
                                                </td>

                                                <td>
                                                    <select name="idnsx" class="form-control">
                                                        <?php
                                                        foreach ($listnsx as $nsx) {
                                                            extract($nsx);

                                                            if ($idnsx == $idnsx_sp)
                                                                $s = "selected";
                                                            else $s = "";

                                                            echo '<option  value="' . $idnsx . '" ' . $s . '> '  . $tennsx .  ' </option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name=" idpl" class="form-control">
                                                        <?php
                                                        foreach ($listpl as $pl) {
                                                            extract($pl);
                                                            if ($idpl == $idpl_sp)
                                                                $s = "selected";
                                                            else $s = "";

                                                            echo '<option  value="' . $idpl . '" ' . $s . '> '  . $tenpl .  ' </option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                                <td><input type="file" class="form-control" name="hinh"></td>
                                            <tr>
                                                <th>Mô tả</th>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <textarea class="motasp" name="mota" id="" cols="30" rows="5" value="<? $mota ?>"></textarea>

                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Ưu đãi </th>
                                                <th>Giá</th>
                                                <th>Số lượng tồn kho</th>
                                                <th>Thao tác</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select class="form-control" name="idud">
                                                        <?php
                                                        foreach ($listud as $ud) {
                                                            extract($ud);
                                                            if ($idud == $idud_sp)
                                                                $s = "selected";
                                                            else $s = "";

                                                            echo '<option  value="' . $idud . '" ' . $s . '> '  . $tenud .  ' </option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </td>

                                                <td><input type="text" class="form-control" name="giasp" placeholder="<?= $giasp ?>"></td>
                                                <td><input type="text" class="form-control" name="soluongtk" placeholder="<?= $soluongtk ?>">
                                                </td>






                                                <td>

                                                    <input type="submit" class="btn btn-soft-primary w-100" name="themmoi" value="Sửa">


                                                </td>

                                            </tr>

                                            </tr>

                                        </tbody>
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