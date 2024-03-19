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

                                            <th>ID SP</th>
                                            <th>ID NSX</th>
                                            <th>Phân loại </th>
                                            <th>ID ưu đãi </th>

                                            <th>Tên sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Số lượng tồn kho</th>
                                            <th>Hình</th>
                                            <th>Mô tả</th>


                                        </tr>
                                    </thead>
                                    <form action="index.php?act=themsp" method="post" enctype="multipart/form-data">
                                        <tbody>
                                            <tr>
                                                <td><input type="text" name="idsp" value="<?= ++$IDmax ?>" readonly style="max-width: 40px;"></td>

                                                <td>
                                                    <select name="idnsx">
                                                        <?php
                                                        foreach ($listnsx as $nsx) {
                                                            extract($nsx);

                                                            echo '<option  value="' . $idnsx . '" > '  . $tennsx .  ' </option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name=" idpl">
                                                        <?php
                                                        foreach ($listpl as $pl) {
                                                            extract($pl);
                                                            echo '<option  value="' . $idpl . '" > '  . $tenpl .  ' </option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="idud">
                                                        <?php
                                                        foreach ($listud as $ud) {
                                                            extract($ud);
                                                            echo '<option  value="' . $idud . '" > '  . $tenud .  ' </option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                                <td><input type="text" name="tensp"></td>
                                                <td><input type="text" name="giasp"></td>
                                                <td><input type="text" name="soluongtk"></td>
                                                <td><input type="file" name="hinh"></td>
                                                <td><input type="text" name="mota"></td>



                                                <td>

                                                    <input type="submit" name="themmoi" value="Thêm">


                                                </td>
                                                <td>

                                                </td>

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