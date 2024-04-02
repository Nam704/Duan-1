<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<!-- <div class="content-page"> -->
<!-- <div class="content"> -->

<!-- Start Content-->
<!-- <div class="container-fluid"> -->

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Velonic</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                    <li class="breadcrumb-item active">Invoice</li>
                </ol>
            </div>
            <h4 class="page-title">Hóa đơn</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <!-- Invoice Logo-->
                <div class="clearfix">
                    <div class="float-start mb-3">
                        <img src="assets/images/logo-dark.png" alt="dark logo" height="22">
                    </div>
                    <div class="float-end">
                        <h4 class="m-0 d-print-none">Invoice</h4>
                    </div>
                </div>

                <!-- Invoice Detail-->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="float-end mt-3">
                            <p><b>Xin chào: <?= $tenuser ?></b></p>
                            <p class="text-muted fs-13">Cảm ơn bạn đã mua hàng từ cửa hàng chúng tôi,
                                vui lòng liên hệ với chúng tôi nếu bạn gặp bất kì vấn đề gì với sản phẩm.
                            </p>
                        </div>

                    </div><!-- end col -->
                    <div class="col-sm-4 offset-sm-2">
                        <div class="mt-3 float-sm-end">
                            <p class="fs-13"><strong>Ngày đặt: </strong> &nbsp;&nbsp;&nbsp; <?= $ngaydh ?></p>
                            <p class="fs-13"><strong>Thanh toán: </strong> <span class="badge bg-success float-end"><?= PTthanhtoan($ptthanhtoan) ?></span></p>
                            <p class="fs-13"><strong>Mã đơn: </strong> <span class="float-end"><?= $madonhang ?></span>
                            </p>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->

                <div class="row mt-4">
                    <div class="col-6">
                        <h6 class="fs-14">Thông tin người nhận</h6>
                        <address>
                            <?= $tenuser ?><br>
                            <?= $address ?><br>
                            <?= $email ?><br>
                            <abbr title="Phone">P:</abbr> <?= $sdt ?>
                        </address>
                    </div> <!-- end col-->

                    <div class="col-6">
                        <h6 class="fs-14">Thông tin người gửi</h6>
                        <address>
                            Nam704<br>
                            Ngõ 63, Tôn Thạch thất, Trường Chinh, Hà Nội<br>
                            namdvph3100@fpt.edu.vn<br>
                            <abbr title="Phone">P:</abbr> 0902244111
                        </address>
                    </div> <!-- end col-->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-sm table-centered table-hover table-borderless mb-0 mt-3">
                                <thead class="border-top border-bottom bg-light-subtle border-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Số Lượng</th>
                                        <th>Đơn giá</th>
                                        <th class="text-end">Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $dem = 0;
                                    $phivc = 35000;
                                    $thanhtiencuoi = 0;
                                    foreach ($listctdh as $sp) {
                                        extract($sp);
                                        ++$dem;
                                        $tensp = laytensp($idsp);
                                        $sanphambt = loadone_spbienthe($idspbt);
                                        extract($sanphambt);
                                        $sanpham = loadone_sanpham($idsp);
                                        extract($sanpham);
                                        // var_dump($sanphambt);
                                        // die();
                                        $tennsx = tennsx($idnsx);
                                        $kichthuoc = tenbnsp($idbnsp);
                                        $tenmau = tenmsp($idmsp);
                                        // $giasp_ctdh = (float)laygiasp($idsp);
                                        $tongtien = number_format($gia * $soluong, 2);
                                        $thanhtiencuoi += $tongtien;
                                        echo '<tr>';
                                        echo '<td class="">' . $dem . '</td>';
                                        echo '<td>';
                                        echo '<b>' . $tensp . '</b> <br />';
                                        echo 'Hãng: ' . $tennsx . '<br />';
                                        echo 'Màu: ' . $tenmau . ' Bộ nhớ: ' . $kichthuoc . ' GB';
                                        echo '</td>';
                                        echo '<td>' . $soluong . '</td>';
                                        echo '<td>' . $gia . '</td>';
                                        echo '<td class="text-end">' . $tongtien . ' VNĐ</td>';
                                        echo '</tr>';
                                    }
                                    ?>


                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-sm-6">
                        <div class="clearfix pt-3">
                            <h6 class="text-muted fs-14">Notes:</h6>
                            <small>
                                Tất cả các tài khoản phải được thanh toán trong vòng 7 ngày kể từ ngày nhận được
                                hóa đơn. Được thanh toán bằng séc hoặc thẻ tín dụng hoặc thanh toán trực tiếp
                                trực tuyến. Nếu tài khoản không được thanh toán trong vòng 7 ngày, chi tiết tín dụng
                                được cung cấp dưới dạng xác nhận công việc được thực hiện sẽ bị tính phí
                                mức phí đã thỏa thuận đã nêu ở trên.
                            </small>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-sm-6">
                        <div class="float-end mt-3 mt-sm-0">
                            <p><b>Sub-total:</b> <span class="float-end"><?= $thanhtiencuoi ?></span></p>
                            <p><b>VAT (12.5):</b> <span class="float-end"><?= $phivc ?></span></p>
                            <h3><?= $thanhtiencuoi + $phivc ?> VNĐ</h3>
                        </div>
                        <div class="clearfix"></div>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->

                <div class="d-print-none mt-4">
                    <div class="text-center">
                        <a href="javascript:window.print()" class="btn btn-primary"><i class="ri-printer-line"></i>
                            Print</a>
                        <a href="javascript: void(0);" class="btn btn-info">Submit</a>
                    </div>
                </div>
                <!-- end buttons -->

            </div> <!-- end card-body-->
        </div> <!-- end card -->
    </div> <!-- end col-->
</div>
<!-- end row -->

<!-- </div>  -->
<!-- container -->

<!-- </div>  -->
<!-- content -->

<!-- Footer Start -->


<!-- end Footer -->

<!-- </div> -->

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- Theme Settings -->



</body>

<!-- Mirrored from themes.getappui.com/techzaa/velonic/layouts/pages-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Mar 2024 13:03:42 GMT -->

</html>