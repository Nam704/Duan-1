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
                        <form action="index.php?act=addnsx" method="post">
                            <tbody>
                                <tr>


                                    <td></td>
                                    <td></td>
                                    <td>
                                        <?= ++$IDmax ?>
                                    </td>
                                    <td><input type="text" name="tennsx" id=""></td>
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