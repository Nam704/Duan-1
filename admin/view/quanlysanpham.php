<?php include "header.php" ?>

<!-- ============================================================== -->
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

            <?php include "listsanpham.php" ?>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4">Inline edit with Button</h4>
                            <div class="table-responsive">
                                <table class="table table-centered mb-0 table-nowrap" id="btn-editable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2016/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2016/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2019/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2017/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2018/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2017/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2017/08/06</td>
                                            <td>$137,500</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>55</td>
                                            <td>2015/10/14</td>
                                            <td>$327,900</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            <td>2019/09/15</td>
                                            <td>$205,500</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td>23</td>
                                            <td>2018/12/13</td>
                                            <td>$103,600</td>
                                        </tr>
                                    </tbody>
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

</div>
<!-- END wrapper -->

<!-- Theme Settings -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
    <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
        <h5 class="text-white m-0">Theme Settings</h5>
        <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>

    <div class="offcanvas-body p-0">
        <div data-simplebar class="h-100">
            <div class="p-3">
                <h5 class="mb-3 fs-16 fw-bold">Color Scheme</h5>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check form-switch card-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-light"
                                value="light">
                            <label class="form-check-label" for="layout-color-light">
                                <img src="assets/images/layouts/light.png" alt="" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check form-switch card-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="data-bs-theme" id="layout-color-dark"
                                value="dark">
                            <label class="form-check-label" for="layout-color-dark">
                                <img src="assets/images/layouts/dark.png" alt="" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                    </div>
                </div>

                <div id="layout-width">
                    <h5 class="my-3 fs-16 fw-bold">Layout Mode</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-layout-mode"
                                    id="layout-mode-fluid" value="fluid">
                                <label class="form-check-label" for="layout-mode-fluid">
                                    <img src="assets/images/layouts/light.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Fluid</h5>
                        </div>

                        <div class="col-4">
                            <div id="layout-boxed">
                                <div class="form-check form-switch card-switch mb-1">
                                    <input class="form-check-input" type="checkbox" name="data-layout-mode"
                                        id="layout-mode-boxed" value="boxed">
                                    <label class="form-check-label" for="layout-mode-boxed">
                                        <img src="assets/images/layouts/boxed.png" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="font-14 text-center text-muted mt-2">Boxed</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <h5 class="my-3 fs-16 fw-bold">Topbar Color</h5>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check form-switch card-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="data-topbar-color"
                                id="topbar-color-light" value="light">
                            <label class="form-check-label" for="topbar-color-light">
                                <img src="assets/images/layouts/light.png" alt="" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check form-switch card-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="data-topbar-color"
                                id="topbar-color-dark" value="dark">
                            <label class="form-check-label" for="topbar-color-dark">
                                <img src="assets/images/layouts/topbar-dark.png" alt="" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                    </div>
                </div>

                <div>
                    <h5 class="my-3 fs-16 fw-bold">Menu Color</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-menu-color"
                                    id="leftbar-color-light" value="light">
                                <label class="form-check-label" for="leftbar-color-light">
                                    <img src="assets/images/layouts/sidebar-light.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Light</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-menu-color"
                                    id="leftbar-color-dark" value="dark">
                                <label class="form-check-label" for="leftbar-color-dark">
                                    <img src="assets/images/layouts/light.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Dark</h5>
                        </div>
                    </div>
                </div>

                <div id="sidebar-size">
                    <h5 class="my-3 fs-16 fw-bold">Sidebar Size</h5>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size"
                                    id="leftbar-size-default" value="default">
                                <label class="form-check-label" for="leftbar-size-default">
                                    <img src="assets/images/layouts/light.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Default</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size"
                                    id="leftbar-size-compact" value="compact">
                                <label class="form-check-label" for="leftbar-size-compact">
                                    <img src="assets/images/layouts/compact.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Compact</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size"
                                    id="leftbar-size-small" value="condensed">
                                <label class="form-check-label" for="leftbar-size-small">
                                    <img src="assets/images/layouts/sm.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Condensed</h5>
                        </div>


                        <div class="col-4">
                            <div class="form-check form-switch card-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="data-sidenav-size"
                                    id="leftbar-size-full" value="full">
                                <label class="form-check-label" for="leftbar-size-full">
                                    <img src="assets/images/layouts/full.png" alt="" class="img-fluid">
                                </label>
                            </div>
                            <h5 class="font-14 text-center text-muted mt-2">Full Layout</h5>
                        </div>
                    </div>
                </div>

                <div id="layout-position">
                    <h5 class="my-3 fs-16 fw-bold">Layout Position</h5>

                    <div class="btn-group checkbox" role="group">
                        <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed"
                            value="fixed">
                        <label class="btn btn-soft-primary w-sm" for="layout-position-fixed">Fixed</label>

                        <input type="radio" class="btn-check" name="data-layout-position"
                            id="layout-position-scrollable" value="scrollable">
                        <label class="btn btn-soft-primary w-sm ms-0"
                            for="layout-position-scrollable">Scrollable</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-footer border-top p-3 text-center">
        <div class="row">
            <div class="col-6">
                <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
            </div>
            <div class="col-6">
                <a href="https://1.envato.market/velonic" target="_blank" role="button"
                    class="btn btn-primary w-100">Buy Now</a>
            </div>
        </div>
    </div>
</div>

<!-- Vendor js -->

<!-- Table Editable plugin-->

<!-- Table editable init-->

<!-- App js -->
<script src="assets/js/app.min.js"></script>

</body>


<!-- Mirrored from themes.getappui.com/techzaa/velonic/layouts/tables-editable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Mar 2024 13:04:09 GMT -->

</html>