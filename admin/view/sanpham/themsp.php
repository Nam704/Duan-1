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

                                    <a href="./index.php?act=listsp">
                                        <input class="btn btn-soft-primary w-100" type="submit" name="danhsachuser"
                                            value="Danh Sách">
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

                                            <th>Tên sản phâm</th>
                                            <th>Tên nhà sản xuất</th>
                                            <th>Phân loại </th>


                                        </tr>
                                    </thead>
                                    <form action="index.php?act=themsp" method="post" enctype="multipart/form-data">
                                        <tbody>
                                            <tr>
                                                <td><input class="form-control" type="text" name="tensp"
                                                        placeholder="Tên sản phẩm"></td>

                                                <td>
                                                    <select name="idnsx" class="form-control">
                                                        <?php
                                                        foreach ($listnsx as $nsx) {
                                                            extract($nsx);

                                                            echo '<option  value="' . $idnsx . '" > '  . $tennsx .  ' </option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name=" idpl" class="form-control">
                                                        <?php
                                                        foreach ($listpl as $pl) {
                                                            extract($pl);
                                                            echo '<option  value="' . $idpl . '" > '  . $tenpl .  ' </option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>

                                                <th>Loại ưu đãi</th>
                                                <th>Giá sản phẩm</th>
                                                <th>Số lượng </th>

                                            </tr>
                                            <td>
                                                <select name="idud" class="form-control">
                                                    <?php
                                                    foreach ($listud as $ud) {
                                                        extract($ud);
                                                        echo '<option  value="' . $idud . '" > '  . $tenud .  ' </option>';
                                                    }
                                                    ?>
                                                </select>
                                            </td>

                                            <td><input type="number" class="form-control" name="giasp"
                                                    placeholder="Giá sản phẩm"></td>
                                            <td><input type="number" class="form-control" name="soluongtk"
                                                    placeholder="Số lượng"></td>
                                            <tr>
                                                <th>Mô tả</th>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <textarea class="motasp" name="mota" id="" cols="30"
                                                        rows="5"></textarea>

                                                </td>


                                                <!-- <td colspan="4"><input type="text" class="motasp" name="mota">
                                                </td> -->

                                            </tr>
                                            <tr>


                                                <th>Hình đại diện</th>
                                                <th>Trạng thái </th>
                                                <th>Thao tác</th>

                                            </tr>
                                            <td><input type="file" class="form-control" name="hinh"></td>
                                            <td><select name="trangthai" class="form-control" id="">
                                                    <option value="0">Bán ngay</option>
                                                    <option value="1">Chưa bán</option>

                                                </select></td>
                                            <td>
                                                <input class="btn btn-soft-primary w-100" type="submit" name="themmoi"
                                                    value="Thêm">
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