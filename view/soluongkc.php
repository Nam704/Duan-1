<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// Kiểm tra xem có dữ liệu được gửi từ mã JavaScript không
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu màu và kích thước từ biến $_POST
    // $color = isset($_POST['color']) ? $_POST['color'] : '';
    $_SESSION['spbt']['slkc']  = isset($_POST['quantity']) ? $_POST['quantity'] : '';
    $slkc = $_SESSION['spbt']['slkc'];

    // Xử lý dữ liệu màu và kích thước ở đây
    // Ví dụ:
    // echo "Màu đã chọn: " . $quantity . "";
    $data = array(

        'quantity' => $slkc,
        'otherData' => 'example'
    );
    header('Content-Type: application/json');
    echo json_encode($data);
    // echo "Kích thước đã chọn: " . $size;
}
