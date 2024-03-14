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
                                <th>Thao tác</th>
                                <!-- <th>Ngày hợp tác</th>
                                <th>Tổng tiền hợp tác</th> -->
                            </tr>
                        </thead>
                        <?php
                        foreach ($listnsx as $nsx) {
                            extract($nsx);
                            $suansx = "./index.php?act=suansx&id=" . $idnsx;
                            $xoansx = "./index.php?act=xoansx&id=" . $idnsx;

                            echo '<tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>' . $idnsx . '</td>
                            <td>' . $tennsx . '</td>
               
                            <td>
                            <a href="' . $suansx . '">Sửa  |  </a>
                            <a href="' . $xoansx . '">Xóa</a>

                                    </td>
                                    <td>
                                </td>

                          
                            
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
                                <td>
                                    
                                </td>
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