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
                                            <th>ID SP</th>

                                            <th>ID Màu</th>
                                            <th>ID BNSP </th>
                                            <th>Giá </th>

                                            <th>Số lượng</th>


                                            <th>Hình</th>

                                            <th>Thao tác</th>



                                        </tr>
                                    </thead>
                                    <form action="index.php?act=themspbt" method="post" enctype="multipart/form-data">
                                        <tbody>
                                            <tr>
                                                <td><input type="text" name="idspbt" value="<?= ++$IDmax ?>" readonly
                                                        style="max-width: 40px;"></td>
                                                <td>
                                                    <select name="idsp">
                                                        <?php
                                                        foreach ($listsp as $nsx) {
                                                            extract($nsx);

                                                            echo '<option  value="' . $idsp . '" >' . $idsp . ' - '  . $tensp .  ' </option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="idmsp">
                                                        <?php
                                                        foreach ($listmsp as $nsx) {
                                                            extract($nsx);

                                                            echo '<option  value="' . $idmsp . '" >' . $idmsp . ' - '  . $tenmausp .  ' </option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="idbnsp">
                                                        <?php
                                                        foreach ($listbnsp as $pl) {
                                                            extract($pl);
                                                            echo '<option  value="' . $idbnsp . '" > '  . $kichthuoc .  ' </option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </td>


                                                <td><input type="text" name="gia"></td>
                                                <td><input type="text" name="soluong"></td>
                                                <td><input type="file" name="hinh"></td>



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