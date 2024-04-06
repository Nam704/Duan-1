<?php
// Kiểm tra xem có dữ liệu được gửi từ mã JavaScript không
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu màu và kích thước từ biến $_POST
    $color = isset($_POST['color']) ? $_POST['color'] : '';
    $size = isset($_POST['size']) ? $_POST['size'] : '';

    // Xử lý dữ liệu màu và kích thước ở đây
    // Ví dụ:
    echo "Màu đã chọn: " . $color . "<br>";
    echo "Kích thước đã chọn: " . $size;
}
/*colors.forEach(function(color) {
        color.addEventListener("change", function() {
            if (this.checked) {
                var selectedColor = this.value;
                sendData(selectedColor, null); // Gửi dữ liệu màu đã chọn
                console.log(sendData(selectedColor, null));
            }
        });
    });

    sizes.forEach(function(size) {
        size.addEventListener("change", function() {
            if (this.checked) {
                var selectedSize = this.value;
                sendData(null, selectedSize); // Gửi dữ liệu kích thước đã chọn
                console.log(sendData(null, selectedSize));
            }
        });
    });*/