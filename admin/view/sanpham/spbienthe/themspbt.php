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

                                    <a href="./index.php?act=listbtfromsp&id=<?= $idsp ?>">
                                        <input class="btn btn-soft-primary w-100" type="button" value="Danh sách">

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

                                            <th>Tên sản phẩm</th>
                                            <th>Màu sản phẩm</th>

                                            <th>Bộ nhớ</th>




                                        </tr>
                                    </thead>
                                    <form action="index.php?act=thembttheosp&id=<?= $idsp ?>" method="post" enctype="multipart/form-data">

                                        <tbody>
                                            <tr>

                                                <td>
                                                    <input class="form-control" type="hidden" name="idsp" value="<?= $idsp ?>">
                                                    <input class="form-control" type="text" name="tensp" id="" readonly value="<?= $tensp ?>">
                                                </td>
                                                <td>
                                                    <select name="idmsp" class="form-control">
                                                        <?php
                                                        foreach ($listmsp as $msp) {
                                                            extract($msp);
                                                            echo '<option  value="' . $idmsp . '"> '  . $tenmausp .  ' </option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                                <td><select name="idbnsp" class="form-control">
                                                        <?php
                                                        foreach ($listbnsp as $bnsp) {
                                                            extract($bnsp);
                                                            echo '<option  value="' . $idbnsp . '"> '  . $kichthuoc .  ' </option>';
                                                        }
                                                        ?>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <th>Giá sản phẩm</th>
                                                <th>Số lượng </th>
                                                <th>Hình</th>
                                            </tr>
                                            <tr>
                                                <td><input class="form-control" type="number" name="giasp" id=""></td>
                                                <td><input class="form-control" type="number" name="soluong" id=""></td>
                                                <td><input class="form-control" type="file" name="hinh" id=""></td>
                                            </tr>



                                            <tr>
                                                <td>
                                                    <input class="btn btn-soft-primary w-100" type="submit" name="themmoi" value="Thêm">
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