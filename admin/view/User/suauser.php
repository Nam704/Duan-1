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
                                    <a href="./index.php?act=listuser">
                                        <input class="btn btn-soft-primary w-100" type="submit" name="danhsachuser" value="Danh Sách">
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

                                            <!-- <th>STT</th> -->
                                            <th>Tên user</th>
                                            <th>Mật khẩu</th>
                                            <th>Quyền hạn</th>



                                        </tr>
                                    </thead>
                                    <form action="index.php?act=updateuser" method="post">
                                        <tbody>
                                            <tr>

                                                <input type="hidden" name="iduser" value="<?= $iduser ?>">


                                                <td><input class="form-control" type="text" name="tenuser" value="<?= $tenuser ?>" placeholder="<?= $tenuser ?>" id="">
                                                </td>
                                                <td><input class="form-control" type="password" name="password" value="<?= $password ?>" placeholder="<?= $password ?>" id="">
                                                </td>
                                                <td><input class="form-control" type="number" style="min-width:150px" value="<?= $quyenhan ?>" placeholder="<?= $quyenhan ?>" name="quyenhan" min="0" max="1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <th>Địa chỉ</th>
                                                <th>Số điện thoại</th>
                                            </tr>
                                            <tr>
                                                <td><input class="form-control" type="text" placeholder="<?= $email ?>" value="<?= $email ?>" name="email" id=""></td>
                                                <td><input class="form-control" type="text" placeholder="<?= $address ?>" value="<?= $address ?>" name="address" id=""></td>
                                                <td><input class="form-control" type="text" placeholder="<?= $sdt ?>" name="sdt" value="<?= $sdt ?>" id=""></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input class="btn btn-soft-primary w-100" type="submit" name="themmoi" value="Cập nhật">
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