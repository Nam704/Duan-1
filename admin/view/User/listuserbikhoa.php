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

                                    <a href="./index.php?act=adduser">
                                        <input class="btn btn-soft-primary w-100" type="button"
                                            value="Thêm người dùng mới">

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
                            <div class="header-title ">
                                <h4>
                                    <a href="index.php?act=listuserbikhoa">Danh sách người dùng bị khóa</a>

                                </h4>
                                <h6>
                                    <a href="index.php?act=listuser">Danh sách người dùng</a>

                                </h6>
                            </div>
                            <!-- <h4 class="header-title mb-4">Inline edit</h4> -->
                            <div class="table-responsive">
                                <table class="table table-centered mb-0 table-nowrap" id="inline-editable">
                                    <thead>
                                        <tr>

                                            <th>STT</th>
                                            <th>Tên user</th>
                                            <th>Mật khẩu</th>
                                            <th>Quyền hạn</th>
                                            <th>Email</th>
                                            <th>Địa chỉ</th>
                                            <th>SĐT</th>
                                            <th>Trạng thái</th>

                                            <th>Thao tác</th>

                                        </tr>
                                    </thead>
                                    <?php
                                    $dem = 0;
                                    foreach ($listuser as $user) {
                                        ++$dem;
                                        extract($user);
                                        if ($trangthai == 1) {
                                            $quyenhan1 = quyenhan($quyenhan);
                                            $trangthai1 = trangthai($trangthai);
                                            $suauser = "./index.php?act=suauser&id=" . $iduser;
                                            $khoauser = "./index.php?act=khoauser&id=" . $iduser;
                                            $mokhoauser = "./index.php?act=mokhoauser&id=" . $iduser;
                                            $chitiet = "./index.php?act=DSdonhangfromuser&id=" . $iduser;
                                          
                                                $lammo = '';
                                            
                                            echo '<tbody   >
                        <tr>
                            <td class="' . $lammo . '">' . $dem . '</td>
                            <td class="' . $lammo . '">' . $tenuser . ' </td>
                            <td class="' . $lammo . '">' . $password . ' </td>
                            <td class="' . $lammo . '">' . $quyenhan1 . ' </td>
                            <td class="' . $lammo . '">' . $email . ' </td>
                            <td class="' . $lammo . '">' . $address . ' </td>
                            <td class="' . $lammo . '">' . $sdt . ' </td>
                            <td class="' . $lammo . '">' . $trangthai1 . ' </td>
                            <td>
                            <a href="' . $suauser . '">
                            <input class="btn btn-soft-primary" type="button" value="Sửa">
                            </a>';

                                            // if ($trangthai == 1) {
                                            //     echo ' 
                                            // <a href="' . $khoauser . '">
                                            // <input class="btn btn-soft-primary" type="button" value="Khóa"></a> ';
                                            // } else {
                                                echo ' <a href="' . $mokhoauser . '">
                                                    <input class="btn btn-soft-primary" type="button" value="Mở khóa">
                                                    </a> ';
                                            // }

                                            echo '
                                        <a href="' . $chitiet . '">
<input class="btn btn-soft-primary" type="button" value="Đơn đã mua">
 </a>
                                </td>

                          
                            
                        </tr>

                        
                    </tbody>';
                                        }
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