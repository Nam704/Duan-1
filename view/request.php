<?php
require_once "../model/pdo.php";
include "../model/nhasanxuat.php";
include "../model/bonhosp.php";
include "../model/mausp.php";
include "../model/user.php";
include "../model/sanpham.php";
include "../model/bienthe.php";
include "../model/donhang.php";
include "../model/ctdonhang.php";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Xử lý request GET ở đây
} else
    // Xử lý request POST ở đây
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy dữ liệu màu và kích thước từ biến $_POST
        $color = isset($_POST['color']) ? $_POST['color'] : '';
        $size = isset($_POST['size']) ? $_POST['size'] : '';
        $idsp = isset($_POST['idsp']) ? $_POST['idsp'] : 'err';

        // Xử lý dữ liệu màu và kích thước ở đây
        // Ví dụ:
        // echo "Màu đã chọn: " . $color;
        // echo "Kích thước đã chọn: " . $size;
        // echo "idsp: " . $idsp;
        $spbt = layidspbt($idsp, $color, $size);
        // var_dump($spbt);

        foreach ($spbt as $key) {
            extract($key);
            // echo "idspbt: " . $key['idspbt'];
            $giaspbt = $key['gia'];
            // echo "idspbt: " . $key['gia'];
        }
        // echo $giaspbt;
        // Chuẩn bị dữ liệu
        $data = array(
            'giaspbt' => $giaspbt, // Dữ liệu bạn muốn trả về
            'otherData' => 'example'
        );

        // Chỉ định header
        header('Content-Type: application/json');

        // Chuyển đổi dữ liệu thành JSON và gửi phản hồi
        echo json_encode($data);
    }