<?php

ob_start();

session_start();

require_once "../model/pdo.php";
include "../model/nhasanxuat.php";
include "../model/bonhosp.php";
include "../model/mausp.php";
include "../model/user.php";
include "../model/sanpham.php";
include "../model/bienthe.php";
include "../model/donhang.php";
include "../model/ctdonhang.php";
$listnsx = loadall_nhasanxuat();
$listmsp = loadall_mausanpham();
$listbnsp = loadall_bonhosp();




include "header.php";
// $kyw = $_GET['kyw'];
// $iddm = $_GET['idnsx'];

// Kiểm tra xem có dữ liệu được gửi từ mã JavaScript không


if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

            // controller User
        case "login":
            if (isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $nguoidung = check_taikhoan($username, $password);
                // $variable = $nguoidung;
                // $type = gettype($nguoidung);
                // echo "Biến \$variable có kiểu dữ liệu là: $type"; 
                // die();
                // var_dump($nguoidung, $username, $password);
                // die();
                if ((isset($nguoidung)) && ($nguoidung == true)) {
                    extract($nguoidung);
                    $_SESSION['user'] = $nguoidung;
                    $_SESSION['thongbao'] = "";
                    // var_dump($_SESSION['thongbao']);
                    // die();
                    header('location: index.php');
                } else {

                    $_SESSION['thongbao'] = "Tài khoản hoặc mật khẩu không đúng, vui lòng kiểm tra và đăng nhập lại!";
                    header('location: User/dangnhap.php');
                }
            }
            break;
        case "register":
            if (isset($_POST['create_account'])) {
                // echo 'have create';
                // die();
                $username = $_POST['username'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $password = $_POST['password'];
                $quyenhan = 0;
                // session_unset();
                insert_nguoidung($username, $password, $quyenhan, $email, $address, $phone);
                //  extract($nguoidung);
                $nguoidung = check_taikhoan($username, $password);
                // $_SESSION['user'] = "";
                $_SESSION['user'] = $nguoidung;

                var_dump($_SESSION['user']);
                // die();
                header('location: index.php');
            } else {
                echo 'no create';

                // die();
            }








            // controller sanpham
        case "timkiemsp":

            if (isset($_POST["timkiem"])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['idnsx'];
                var_dump($kyw, $iddm);
                // die();
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $listnsx = loadall_nhasanxuat();
            $listsp = loadall_sanphamclien($kyw, $iddm);
            // var_dump($listsp);
            include "home.php";
            break;
        case "addtocart":
            // header("location: ./sanpham/giohang.php");
            // include "./sanpham/cart.php";
            break;

        case "viewcart":
            // header("location: ./sanpham/giohang.php");
            include "./sanpham/cart.php";
            break;
        case "checkout":
            // header("location: ./sanpham/giohang.php");
            include "./sanpham/donhang.php";
            break;
        case "muahang":
            // header("location: ./sanpham/giohang.php");
            include "./sanpham/muahang.php";
            break;
        case "complete":
            // header("location: ./sanpham/giohang.php");
            include "./sanpham/complete.php";
            break;
        case "ctsanpham":
            $idsp = isset($_GET['idsp']);
            $idnsx = isset($_GET['idnsx']);
            $sanpham =  loadone_sanpham($_GET['idsp']);
            extract($sanpham);
            $tennsx = tennsx($idnsx);
            $listspbt = selectspbt($idsp);
            $listimgsp = showimgsp($idsp);
            $listgiasp = listgiasp($idsp);
            $giaspmax = giaspmax($idsp);
            $giaspmin = giaspmin($idsp);
            $tongsl = tongsoluongspbttrongsp($idsp);
            $listmsp = listmspbt($idsp);
            $listbnsp = listbnspbt($idsp);
            $listspcungloai = load_sanpham_cungloai($idsp, $idnsx);


            // $listnsx = loadall_nhasanxuat();
            include "./sanpham/chitietsanpham.php";
            break;
    }
} else {
    $listnsx = loadall_nhasanxuat();
    $listmsp = loadall_mausanpham();
    $listbnsp = loadall_bonhosp();
    $listsp = loadall_sanpham_dangban();
    include "home.php";
}
include "footer.php";
