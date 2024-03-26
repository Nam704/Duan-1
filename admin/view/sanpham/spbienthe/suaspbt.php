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
                                    <a href="./index.php?act=listspbt&id=<?= $idsp ?>">
                                        <input class="btn btn-soft-primary w-100" type="button" value="Danh sách biến thể của sản phẩm">

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
                            <h4 class="header-title mb-4">Biến thể của: </h4>
                            <a style="font-size: 16px;" href="index.php?act=chitietsp&id=<?= $idsp ?>"><?= $tensp ?></a>
                            <div class="table-responsive">
                                <table class="table table-centered mb-0 table-nowrap" id="inline-editable">
                                    <thead>
                                        <tr>
                                            <!-- <th>ID SPBT</th> -->
                                            <!-- <th>ID SP</th> -->
                                            <th>Màu</th>
                                            <th>Bộ nhớ sản phẩm </th>
                                            <th>Giá </th>




                                        </tr>
                                    </thead>
                                    <form action="index.php?act=updatespbt" method="post" enctype="multipart/form-data">
                                        <tbody>
                                            <tr>
                                                <input type="hidden" name="idspbt" value="<?= $idspbt ?>">
                                                <input type="hidden" name="idsp" value="<?= $idsp ?>">

                                                <td>
                                                    <select name="idmsp" class="form-control">
                                                        <?php
                                                        foreach ($listmsp as $msp) {
                                                            extract($msp);

                                                            if ($idmsp == $idmsp_spbt)
                                                                $s = "selected";
                                                            else $s = "";

                                                            echo '<option  value="' . $idmsp . '" ' . $s . '> '  . $tenmausp .  ' </option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="idbnsp" class="form-control">
                                                        <?php
                                                        foreach ($listbnsp as $bnsp) {
                                                            extract($bnsp);
                                                            if ($idbnsp == $idbnsp_spbt)
                                                                $s = "selected";
                                                            else $s = "";

                                                            echo '<option  value="' . $idbnsp . '" ' . $s . '> '  . $kichthuoc .  ' </option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </td>

                                                <td><input type="number" name="giasp" class="form-control" placeholder="<?= $gia ?>"></td>
                                            <tr>
                                                <th>Số lượng</th>
                                                <th>Hình</th>
                                                <th>Thao tác</th>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" name="soluong" placeholder="<?= $soluong ?>">
                                                </td>
                                                <td><input type="file" class="form-control" name="hinh"></td>
                                                <td>
                                                    <input class="btn btn-soft-primary w-100" type="submit" name="themmoi" value="Sửa">
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