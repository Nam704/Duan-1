<?php
session_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once "../model/pdo.php";
include "../model/nhasanxuat.php";
include "../model/bonhosp.php";
include "../model/mausp.php";
include "../model/user.php";
include "../model/sanpham.php";
include "../model/bienthe.php";
include "../model/donhang.php";
include "../model/ctdonhang.php";
include "../model/giohang.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
} else
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Lấy dữ liệu màu và kích thước từ biến $_POST
    $_SESSION['spbt']['color'] = isset($_POST['color']) ? $_POST['color'] : '';
    $color = $_SESSION['spbt']['color'];
    $_SESSION['spbt']['size'] = isset($_POST['size']) ? $_POST['size'] : '';
    $size = $_SESSION['spbt']['size'];


    $iduser = $_SESSION['user']['iduser'];
    $idgh = return_IDgh($iduser);
    $idsp = isset($_POST['idsp']) ? $_POST['idsp'] : 'err';
    $action = isset($_POST['action']) ? $_POST['action'] : '';

    $spbt = layidspbt($idsp, $color, $size);
    foreach ($spbt as $key) {
        extract($key);
        $idspbt =  $key['idspbt'];
        $giaspbt = $key['gia'];
        $soluong = $key['soluong'];
        $idsp = $key['idsp'];
    }
    $data = array(
        'giaspbt' => $giaspbt,
        'idspbt' => $idspbt,
        'soluonghang' => $soluong,


        'idgh' => $idgh,
        'iduser' => $iduser,


        'otherData' => 'example'
    );
    header('Content-Type: application/json');
    echo json_encode($data);
    if ($action === 'addtocart') {
        $spbt = layidspbt($idsp, $color, $size);
        foreach ($spbt as $key) {
            extract($key);
            $idspbt =  $key['idspbt'];
            $giaspbt = $key['gia'];
            $soluong = $key['soluong'];
            $idsp = $key['idsp'];
        }
        if ($soluongkhachchon > $soluong) {

            $thongbao = "Rất tiếc, số lượng sản phẩm chỉ còn " . $soluong . ", vui lòng chọn số lượng nhỏ hơn " . $soluong;
            // $thongbao = "erro";
        } else {
            $thongbao = "Đã thêm sản phẩm vào giỏ hàng";
            $chitietgh = themSPvaoGH($idspbt, $iduser, $idgh, $soluongkhachchon, $giaspbt, $idsp);
            // $soluongconlai = $soluong - $soluongkhachchon;

            // updateSlspbt($idspbt, $soluongconlai);
            $listspcart = load_allsptronggiohang($idgh);
            $_SESSION['listspcart'] = $listspcart;
            session_write_close();
        }
    } elseif ($action === 'selectspbt') {
        $spbt = layidspbt($idsp, $color, $size);
        foreach ($spbt as $key) {
            extract($key);
            $idspbt =  $key['idspbt'];
            $giaspbt = $key['gia'];
        }
    } elseif ($action === 'muangay') {
        $soluongkhachchon = $_SESSION['spbt']['slkc'];
        $tonggiactdon = $soluongkhachchon * $giaspbt;
        $_SESSION['ctdon'] = ctdonmuangay($iduser, $idspbt, $giaspbt, $soluongkhachchon, $tonggiactdon);





        // $spbt = layidspbt($idsp, $color, $size);
        // foreach ($spbt as $key) {
        //     extract($key);
        //     $idspbt =  $key['idspbt'];
        //     $giaspbt = $key['gia'];
        //     $soluong = $key['soluong'];
        //     $idsp = $key['idsp'];
        // }
        // $nguoidung = loadone_nguoidung($iduser);
        // include "soluongkc.php";
        // echo $slkc;
        // die();

        // foreach ($nguoidung as $keynguoidung) {
        //     extract($keynguoidung);
        //     echo $keynguoidung;
        // }
        // $_SESSION['donhang'] = donhangmuangay($iduser, $ngaydh, $trangthai, $diachigh, $sdt, $ptthanhtoan, $tonggia);
        // $tonggiactdon = $soluongkhachchon * $giaspbt;
        // 
        if ($soluongkhachchon > $soluong) {

            $thongbao = "Chưa mua được";
        } else {
            $thongbao = "Mua ngay";
        }
    }
}
