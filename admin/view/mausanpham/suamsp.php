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
                                    <a href="./index.php?act=listmausp">
                                        <input class="btn btn-soft-primary w-100" type="button"
                                            value="Danh sách màu sản phẩm">

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
                            <h4 class="header-title mb-4"></h4>
                            <div class="table-responsive">
                                <table class="table table-centered mb-0 table-nowrap" id="inline-editable">
                                    <thead>
                                        <tr>

                                            <th>STT</th>

                                            <th>Tên màu</th>
                                            <th>Thao tác</th>

                                        </tr>
                                    </thead>
                                    <form action="index.php?act=updatemsp" method="post">
                                        <tbody>
                                            <tr>



                                                <td>
                                                    <input type="hidden" name="idmsp" value="<?= $idmsp ?>">
                                                    <?= $idmsp ?>
                                                </td>
                                                <td><input class="form-control" type="text" name="tenmsp" id=""
                                                        placeholder="<?= $tenmausp ?>" value="<?= $tenmausp ?>">
                                                </td>
                                                <td>

                                                    <input type="submit" class="btn btn-soft-primary w-100"
                                                        name="themmoi" value="Sửa">


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