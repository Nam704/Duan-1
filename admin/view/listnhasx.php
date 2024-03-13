<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-4">Inline edit</h4>
                <div class="table-responsive">
                    <table class="table table-centered mb-0 table-nowrap" id="inline-editable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>ID nhà sản xuất</th>

                                <th>Tên nhà sản xuất</th>
                                <!-- <th>Tổng số sản phẩm</th>
                                <th>Ngày hợp tác</th>
                                <th>Tổng tiền hợp tác</th> -->
                            </tr>
                        </thead>
                        <?php
                        foreach ($listnsx as $nsx) {
                            extract($nsx);
                            // $suadm = "./index.php?act=suadm&id=" . $id;
                            // $xoadm = "./index.php?act=xoadm&id=" . $id;

                            echo '<tbody>
                        <tr>
                            <td>1</td>
                            <td>Tiger Nixon</td>
                            <td>' . $idnsx . '</td>

                            <td>' . $tennsx . '</td>
                            
                        </tr>
                        
                    </tbody>';
                        }
                        ?>
                        <!-- <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2016/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            
                        </tbody> -->
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