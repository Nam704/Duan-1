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
                                  <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>
                                  <li class="breadcrumb-item active">Cards</li>
                              </ol>
                          </div>
                          <h4 class="page-title">Cards</h4>
                      </div>
                  </div>
              </div>
              <!-- end page title -->

              <div class="row">
                  <div class="col-sm-6 col-lg-3">

                      <!-- Simple card -->
                      <div class="d-block">
                          <div class="list-imgsp">
                              <img class="card-img-top" src="../../upload/sanpham1.jfif" alt="Card image cap">
                              <div class="album-imgs">
                                  <!-- <img src="../../upload/sanpham1.jfif" alt="Card image cap">
                                  <img src="../../upload/sanpham1.jfif" alt="Card image cap">
                                  <img src="../../upload/sanpham1.jfif" alt="Card image cap">
                                  <img src="../../upload/sanpham1.jfif" alt="Card image cap">
                                  <img src="../../upload/sanpham1.jfif" alt="Card image cap"> -->
                                  <?php
                                    $dem = 0;
                                    foreach ($listimgsp as $tenimg) {
                                        extract($tenimg);
                                        ++$dem;

                                        if ($dem <= 5) {
                                            # code...
                                            $url_image = "../../upload/" . $tenimg["img_name"];
                                            echo '<img src="' . $url_image . '" alt="Card image cap">';
                                        } else {
                                            break;
                                        }
                                    }
                                    ?>

                              </div>
                          </div>
                          <div class="chitietsp">
                              <h4 class="card-title"> Tên sản phẩm: <?= $tensp ?></h4>
                              <h4 class="card-title"> Tên nhà sản xuất: <?= $tennsx ?></h4>
                              <h4 class="card-title"> Giá Sản phẩm: <?= $giaspmin ?> - <?= $giaspmax ?></h4>
                              <h4 class="card-title"> Số lượng: <?= $tongsl ?></h4>
                              <h4 class="card-title"> Trạng Thái: <?= tentrangthaisp($trangthai) ?></h4>
                              <div class="mausanpham">
                                  <h4 class="card-title"> Loại màu</h4>
                                  <!-- <select name="idmsp" class="form-control"> -->
                                  <?php
                                    foreach ($listmsp as $msp) {
                                        extract($msp);
                                        $tenmausp = tenmsp($msp["idmsp"]);
                                        echo ' <input class="" type="button" value="' . $tenmausp . '">';
                                    }
                                    ?>
                                  <!-- </select> -->

                                  <?php
                                    // foreach ($variable as $key => $value) {
                                    //     echo '
                                    //             <input type="button" value="">
                                    //             ';
                                    // }
                                    ?>
                              </div>
                              <div class="bonhosanpham">
                                  <h4 class="card-title"> kích thước bộ nhớ</h4>
                                  <?php
                                    foreach ($listbnsp as $bnsp) {
                                        extract($bnsp);
                                        $kichthuoc = tenbnsp($bnsp["idbnsp"]);
                                        echo ' <input class="" type="button" value="' . $kichthuoc . ' GB">';
                                    }
                                    ?>

                                  <?php
                                    // foreach ($variable as $key => $value) {
                                    //     echo '
                                    //             <input type="button" value="">
                                    //             ';
                                    // }
                                    ?>
                              </div>


                          </div>
                      </div>
                      <div class="card-body">
                          <h4 class="card-title">Mô tả</h4>
                          <p class="card-text"><?= $mota ?></p>
                          <!-- <a href="javascript: void(0);" class="btn btn-primary">Sửa mô tả</a> -->
                      </div>
                  </div> <!-- end card-->
              </div><!-- end col -->





          </div>
          <!-- end row -->
















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

  </div>