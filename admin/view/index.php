<?php
ob_start();
session_start();

include "../../../../Duan1/Duan-1/model/pdo.php";
include "../../../../Duan1/Duan-1/model/nhasanxuat.php";
include "../../../../Duan1/Duan-1/model/bonhosp.php";
include "../../../../Duan1/Duan-1/model/mausp.php";
include "../../../../Duan1/Duan-1/model/user.php";
include "../../../../Duan1/Duan-1/model/admin.php";
include "../../../../Duan1/Duan-1/model/khachhang.php";
include "../../../../Duan1/Duan-1/model/sanpham.php";
include "../../../../Duan1/Duan-1/model/bienthe.php";
include "../../../../Duan1/Duan-1/model/donhang.php";
include "../../../../Duan1/Duan-1/model/ctdonhang.php";
$tongsodonhang = tongsodonhang();
$listuser = loadall_nguoidung();
// $listadminfromuser = selectAdmins();
// $listKHfromuser = selectKH();
$tongtienallDH = tongtienallDH();
$tongalluser = tongsonguoidung();
$listdonhang = loadall_donhang();

// $DStrangthaidon = load_alltrangthaidon();

// var_dump($listdonhang);
extract($listdonhang);





include "header.php";

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

            // controller nhasanxuat
        case "listnsx":

            $listnsx = loadall_nhasanxuat();
            include "./nhasanxuat/listnhasx.php";
            break;

        case "addnsx":
            $listnsx = loadall_nhasanxuat();
            $IDmax = showIDnsxMax();
            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $tennsx = $_POST["tennsx"];
                insert_nhasanxuat($tennsx);
                $IDmax = showIDnsxMax();
            }

            include "./nhasanxuat/addnhasx.php";

            break;
        case 'xoansx':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                khoa_nsx($_GET['id']);
            }
            $listnsx = loadall_nhasanxuat();
            include "./nhasanxuat/listnhasx.php";
            break;
        case 'mokhoansx':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                mokhoa_nsx($_GET['id']);
            }
            $listnsx = loadall_nhasanxuat();
            include "./nhasanxuat/listnhasx.php";
            break;
        case 'suansx':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $nsx = loadone_nhasanxuat($_GET['id']);
                extract($nsx);
                include "./nhasanxuat/suanhasx.php";
            }
            break;
        case "updatensx":
            $listnsx = loadall_nhasanxuat();

            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $tennsx = $_POST["tennsx"];
                $idnsx = $_POST["idnsx"];

                updatensx($idnsx, $tennsx);
            }
            header("Location: index.php?act=listnsx");


            break;
            // conntroller sanpham
        case "listsp":
            if (isset($_POST["listok"]) && ($_POST["listok"])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['idnsx'];
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $listnsx = loadall_nhasanxuat();

            $listsp = loadall_sanpham($kyw, $iddm);
            include "./sanpham/listsanpham.php";
            break;
        case "listspdb":
            if (isset($_POST["listok"]) && ($_POST["listok"])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['idnsx'];
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $listnsx = loadall_nhasanxuat();

            $listsp = loadall_sanpham($kyw, $iddm);
            include "./sanpham/listspdungban.php";
            break;
        case "themsp":
            $listnsx = loadall_nhasanxuat();
            $listpl = loadall_phanloai();
            $listud = loadall_ud();
            $IDmax = showIDspMax();

            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {

                // $idsp = $_POST["idsp"];
                $idnsx = $_POST["idnsx"];
                $idpl = $_POST["idpl"];
                $idud = $_POST["idud"];
                $tensp = $_POST["tensp"];
                $giasp = $_POST["giasp"];
                $mota = $_POST["mota"];
                $soluongtk = $_POST["soluongtk"];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
                var_dump($hinh);
                insert_sanpham($idnsx, $idpl, $idud, $tensp, $giasp, $soluongtk, $hinh, $mota);
                $IDmax = showIDspMax();
            }

            include "./sanpham/themsp.php";
            break;
        case 'chitietsp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham =  loadone_sanpham($_GET['id']);
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
            }

            include "./sanpham/chitietsp.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                khoa_sp($_GET['id']);
            }
            $listsp = loadall_sanpham("", 0);
            include "./sanpham/listsanpham.php";
            break;
        case 'mokhoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                mokhoa_sp($_GET['id']);
            }
            $listsp = loadall_sanpham("", 0);
            include "./sanpham/listspdungban.php";
            break;
        case 'suasp':
            $listnsx = loadall_nhasanxuat();
            $listpl = loadall_phanloai();
            $listud = loadall_ud();
            $IDmax = showIDspMax();
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sp = loadone_sanpham($_GET['id']);
                extract($sp);

                $idnsx_sp = $idnsx;
                $idpl_sp = $idpl;
                $idud_sp = $idud;

                include "./sanpham/suasp.php";
            }
            break;
        case "updatesp":


            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {

                $idsp = $_POST["idsp"];
                $idnsx = $_POST["idnsx"];
                $idpl = $_POST["idpl"];
                $idud = $_POST["idud"];
                $tensp = $_POST["tensp"];
                $giasp = $_POST["giasp"];
                $mota = $_POST["mota"];
                $soluongtk = $_POST["soluongtk"];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($idsp, $idnsx, $idpl, $idud, $tensp, $giasp, $soluongtk, $hinh, $mota);
            }

            header("location: index.php?act=listsp");
            break;
            // mở rộng sản phẩm biến thể

        case 'listbtfromsp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
                extract($sanpham);
                // $listmsp = loadall_mausanpham();
                // $listbnsp = loadall_bonhosp();
                // $listud = loadall_ud();
                // $IDmax = showIDspMax();

                $listspbt = selectspbt($_GET['id']);

                include "./sanpham/spbienthe/listspbt.php";
            }

            break;


        case "thembttheosp":



            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
                extract($sanpham);
                $listsp = loadall_sanpham("", 0);
                $listmsp = loadall_mausanpham();
                $listbnsp = loadall_bonhosp();

                if (isset($_GET['error'])) {
                    // echo "<p class='error'>";
                    // echo htmlspecialchars($_GET['error']);
                    // echo "</p>";
                    $error = $_GET['error'];
                    // var_dump($error);
                    // die();
                    // break;
                }
                // $listud = loadall_ud();
                // $IDmax = showIDspbtMax();
            }
            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $idsp = $_POST["idsp"];
                // $idspbt = $_POST["idspbt"];
                $idmsp = $_POST["idmsp"];
                $idbnsp = $_POST["idbnsp"];
                $gia = $_POST["giasp"];
                $soluong = $_POST["soluong"];
                $listimgsp = uploadimgsp($_GET['id']);
                // $hinh = $_FILES['hinh']['name'];
                // $target_dir = "../../upload/";
                // $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                // if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                //     echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                // } else {
                //     echo "Sorry, there was an error uploading your file.";
                // }
                // var_dump($hinh);
                // insert_spbienthe($idmsp, $idbnsp, $idsp, $gia, $soluong, $hinh);
                insert_spbienthe($idmsp, $idbnsp, $idsp, $gia, $soluong);

                $IDmax = showIDspbtMax();

                // include "./sanpham/spbienthe/themspbt.php";
            }

            include "./sanpham/spbienthe/themspbt.php";

            break;

        case 'khoaspbt':
            if (isset($_GET['id'])) {
                khoa_spbt($_GET['id']);
                $spbt = loadone_spbienthe($_GET['id']);
                extract($spbt);
                $sanpham = loadone_sanpham($idsp);
                extract($sanpham);
            }
            $listspbt = selectspbt($idsp);
            include "./sanpham/spbienthe/listspbt.php";
            break;
        case 'mokhoaspbt':
            if (isset($_GET['id'])) {
                mokhoa_spbt($_GET['id']);
                $spbt = loadone_spbienthe($_GET['id']);
                extract($spbt);
                $sanpham = loadone_sanpham($idsp);
                extract($sanpham);
            }
            $listspbt = selectspbt($idsp);
            include "./sanpham/spbienthe/listspbt.php";
            break;
        case 'suaspbt':
            $listmsp = loadall_mausanpham();
            $listbnsp = loadall_bonhosp();
            $listsp = loadall_sanpham("", 0);
            $IDmax = showIDspbtMax();
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $spbt = loadone_spbienthe($_GET['id']);
                extract($spbt);
                $idsp_spbt = $idsp;
                $idmsp_spbt = $idmsp;
                $idbnsp_spbt = $idbnsp;
                $IDmax = showIDspbtMax();
                $sanpham = loadone_sanpham($idsp);
                extract($sanpham);
                include "./sanpham/spbienthe/suaspbt.php";
            }
            break;
        case "updatespbt":


            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {

                $idsp = $_POST["idsp"];
                $idspbt = $_POST["idspbt"];
                $idmsp = $_POST["idmsp"];
                $idbnsp = $_POST["idbnsp"];
                $gia = $_POST["gia"];
                $soluong = $_POST["soluong"];

                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
                update_spbienthe($idspbt, $idmsp, $idbnsp, $idsp, $gia, $soluong, $hinh);
            }

            header("location: index.php?act=listspbt");
            break;
            // controller donhang
        case "listdh":
            if (isset($_GET['trangthai'])) {
                $trangthai = $_GET['trangthai'];
                $listdh = listDHtheotrangthai($trangthai);
            }


            include "./donhang/listdonhang.php";
            break;
        case "trangthaitt":
            if (isset($_GET['trangthai']) && isset($_GET['id'])) {
                $trangthai = (int)$_GET['trangthai'];
                $trangthaitt = ++$trangthai;
                $iddh = $_GET['id'];
                capnhattranthai($iddh, $trangthaitt);
                // --$trangthai;
                $listdh = listDHtheotrangthai($trangthai);
            }


            include "./donhang/listdonhang.php";
            break;
        case "tuchoihoandon":
            if (isset($_GET['trangthai']) && isset($_GET['id'])) {
                $trangthai = (int)$_GET['trangthai'];
                $iddh = $_GET['id'];
                capnhattranthai($iddh, $trangthai);
                $listdh = listDHtheotrangthai($trangthai);
                include "./donhang/listdonhang.php";
            }


            break;
        case "chapnhanhoandon":
            if (isset($_GET['trangthai']) && isset($_GET['id'])) {
                $trangthai = (int)$_GET['trangthai'];
                $iddh = $_GET['id'];
                capnhattranthai($iddh, $trangthai);
                $listdh = listDHtheotrangthai($trangthai);
                include "./donhang/listdonhang.php";
            }


            break;
        case "chapnhanhuydon":
            if (isset($_GET['trangthai']) && isset($_GET['id'])) {
                $trangthai = (int)$_GET['trangthai'];
                $iddh = $_GET['id'];
                capnhattranthai($iddh, $trangthai);
                $listdh = listDHtheotrangthai(7);
                include "./donhang/listdonhang.php";
            }


            break;
        case 'chapnhandh':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                chapnhan($_GET['id']);
            }
            if (isset($_GET['trangthai'])) {
                $trangthai = $_GET['trangthai'];

                $listdh = listDHtheotrangthai($trangthai);

                include "./donhang/listdonhang.php";
            }
            break;
        case 'tuchoidh':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                tuchoi($_GET['id']);
            }
            if (isset($_GET['trangthai'])) {
                $trangthai = $_GET['trangthai'];

                $listdh = listDHtheotrangthai($trangthai);

                include "./donhang/listdonhang.php";
            }
            break;
        case 'listctdh':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $donhang = loadone_donhang($_GET['id']);
                extract($donhang);
                $khachhang = loadone_nguoidung($iduser);
                extract($khachhang);
                $madonhang = taomadonhang($iddh, $iduser);
                // var_dump($iddh);
                $listctdh = selectctdh($iddh);
                // var_dump($listctdh);
                foreach ($listctdh as $ctdh) {
                    extract($ctdh);
                    // $giasp_ctdh = (float)laygiasp($idsp);
                    $tongtien = number_format($giasp * $soluong, 2);
                }



                include "./donhang/ctdonhang.php";
            }

            break;


            //controller bonhosanpham
        case "listbnsp":

            $listbnsp = loadall_bonhosp();
            include "./bonhosp/listbnsp.php";
            break;
        case "addbnsp":
            $listbnsp = loadall_bonhosp();
            $IDmax = showIDbnspMax();
            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $tenbnsp = $_POST["tenbnsp"];
                insert_bonhosp($tenbnsp);
                $IDmax = showIDnsxMax();
            }

            include "./bonhosp/addbnsp.php";

            break;
        case 'xoabnsp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                khoa_bnsp($_GET['id']);
            }
            $listbnsp = loadall_bonhosp();
            include "./bonhosp/listbnsp.php";
            break;
        case 'mokhoabnsp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                mokhoa_bnsp($_GET['id']);
            }
            $listbnsp = loadall_bonhosp();
            include "./bonhosp/listbnsp.php";
            break;
        case 'suabnsp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $bnsp = loadone_bonhosp($_GET['id']);
                extract($bnsp);
                include "./bonhosp/suabnsp.php";
            }
            break;
        case "updatebnsp":
            $listbnsp = loadall_bonhosp();

            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $kichthuoc = $_POST["kichthuoc"];
                $idbnsp = $_POST["idbnsp"];

                update_bonhosp($idbnsp, $kichthuoc);
            }
            header("Location: index.php?act=listbnsp");




            break;






            //controller màu sản phẩm
        case "listmausp":

            $listmsp = loadall_mausanpham();
            include "./mausanpham/listmsp.php";
            break;
        case "addmsp":
            $listmsp = loadall_mausanpham();
            $IDmax = showIDmspMax();
            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $tenmsp = $_POST["tenmsp"];
                insert_mausanpham($tenmsp);
                $IDmax = showIDmspMax();
            }

            include "./mausanpham/addmsp.php";

            break;
        case 'xoamsp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                khoa_msp($_GET['id']);
            }
            $listmsp = loadall_mausanpham();
            include "./mausanpham/listmsp.php";
            break;
        case 'mokhoamsp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                mokhoa_msp($_GET['id']);
            }
            $listmsp = loadall_mausanpham();
            include "./mausanpham/listmsp.php";
            break;
        case 'suamsp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $msp = loadone_mausanpham($_GET['id']);
                extract($msp);
                include "./mausanpham/suamsp.php";
            }
            break;
        case "updatemsp":
            $listmsp = loadall_mausanpham();

            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $tenmsp = $_POST["tenmsp"];
                $idmsp = $_POST["idmsp"];

                update_mausanpham($idmsp, $tenmsp);
            }
            header("Location: index.php?act=listmausp");




            break;
            // controller User
        case 'listuser':
            $listuser = loadall_nguoidung();
            include "User/listuser.php";
            break;
        case 'listuserbikhoa':
            $listuser = loadall_nguoidung();
            include "User/listuserbikhoa.php";
            break;
        case "adduser":
            $listuser = loadall_nguoidung();
            $IDmax = showiduserMax();
            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $tenuser = $_POST["tenuser"];
                $password = $_POST["password"];
                $quyenhan = $_POST["quyenhan"];
                $email = $_POST["email"];
                $address = $_POST["address"];
                $sdt = $_POST["sdt"];
                insert_nguoidung($tenuser, $password, $quyenhan, $email, $address, $sdt);
                $IDmax = showiduserMax();
            }

            include "./User/adduser.php";

            break;
        case 'khoauser':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                khoa_nguoidung($_GET['id']);
            }
            $listuser = loadall_nguoidung();
            include "./User/listuser.php";
            break;
        case 'mokhoauser':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                mokhoa_nguoidung($_GET['id']);
            }
            $listuser = loadall_nguoidung();
            include "./User/listuser.php";
            break;
        case 'suauser':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $user = loadone_nguoidung($_GET['id']);
                extract($user);
                include "./User/suauser.php";
            }
            break;
        case 'DSdonhangfromuser':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $listdh = donhangfromnguoidung($_GET['id']);
                // $tenkhach = tenkh($_GET['id']);
                extract($listdh);
                include "./donhang/listdonhang.php";
            }
            break;
        case "updateuser":
            $listuser = loadall_nguoidung();
            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $tenuser = $_POST["tenuser"];
                $iduser = $_POST["iduser"];
                $password = $_POST["password"];
                $quyenhan = $_POST["quyenhan"];
                $email = $_POST["email"];
                $address = $_POST["address"];
                $sdt = $_POST["sdt"];

                update_nguoidung($iduser, $tenuser, $password, $quyenhan, $email, $address, $sdt);
            }

            header("Location: index.php?act=listuser");
            // exit;
            // ob_end_flush();



            break;

            // controller Admin
        case 'listAdmin':
            $listqtv = loadall_quantrivien();
            include "./User/Admin/listAdmin.php";
            break;
        case "addAdmin":
            global $listadminfromuser;

            $listadmin = loadall_quantrivien();
            $IDmax = showidqtvMax();
            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $iduser = $_POST["iduser"];
                $tenqtv = $_POST["tenqtv"];
                $email = $_POST["email"];
                $address = $_POST["address"];
                $sdt = $_POST["sdt"];

                insert_quantrivien($iduser, $tenqtv, $email, $address, $sdt);
                $IDmax = showidqtvMax();
            }

            include "./User/Admin/addAdmin.php";

            break;
        case 'xoaAdmin':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // delete_nguoidung($_GET['id']);
            }
            $listuser = loadall_nguoidung();
            include "./User/listuser.php";
            break;
        case 'suaAdmin':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $admin = loadone_quantrivien($_GET['id']);
                extract($admin);
                $iduser_admin = $iduser;
                include "./User/Admin/suaAdmin.php";
            }
            break;
        case "updateAdmin":
            global $listadminfromuser;

            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $iduser = $_POST["iduser"];
                $idqtv = $_POST["idqtv"];
                $tenqtv = $_POST["tenqtv"];
                $email = $_POST["email"];
                $address = $_POST["address"];
                $sdt = $_POST["sdt"];

                update_quantrivien($iduser, $idqtv, $tenqtv, $email, $address, $sdt);
            }

            header("location: index.php?act=listAdmin");
            break;

            // controller khách hàng
        case 'listkh':
            $listkh = loadall_khachhang();
            include "./User/Khachhang/listKH.php";
            break;
        case "addKH":
            global $listKHfromuser;

            $listkh = loadall_khachhang();
            $IDmax = showidkhMax();
            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $iduser = $_POST["iduser"];
                $tenkh = $_POST["tenkh"];
                $email = $_POST["email"];
                $address = $_POST["address"];
                $sdt = $_POST["sdt"];

                insert_khachhang($iduser, $tenkh, $email, $address, $sdt);
                $IDmax = showidkhMax();
            }

            include "./User/Khachhang/addKH.php";

            break;


        case 'xoakh':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_khachhang($_GET['id']);
            }
            $listkh = loadall_khachhang();
            include "./User/Khachhang/listKH.php";
            break;
        case 'suakh':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $khachhang = loadone_khachhang($_GET['id']);
                extract($khachhang);
                $iduser_kh = $iduser;
                include "./User/Khachhang/suaKH.php";
            }
            break;
        case "updatekh":
            global $listKHfromuser;

            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $iduser = $_POST["iduser"];
                $idkh = $_POST["idkh"];
                $tenkh = $_POST["tenkh"];
                $email = $_POST["email"];
                $address = $_POST["address"];
                $sdt = $_POST["sdt"];

                update_kh($iduser, $idkh, $tenkh, $email, $address, $sdt);
            }

            header("location: index.php?act=listkh");
            break;



            //     break;
            // thao tac tai khoan
            // case "quenmk":
            //     if (isset($_POST["capmk"]) && ($_POST["capmk"])) {

            //         $email = $_POST['email'];
            //         $username = $_POST['username'];
            //         $check_email = check_email_taikhoan($email);
            //         if (is_array($check_email)) {
            //             $password_new = $random_number = rand(1000, 9999);
            //             $update_password = update_password($email, $password_new);
            //             $_SESSION['user'] = check_taikhoan($username, $password_new);
            //         }
            //     }
            //     include "view/taikhoan/quenmk.php";
            //     break;
            // case "dangki":
            //     if (isset($_POST["dangki"]) && ($_POST["dangki"])) {
            //         $username = $_POST['username'];
            //         $password = $_POST['password'];
            //         $taikhoan = insert_taikhoan($username, $password);

            //         $thongbao = "thanh cong";
            //     }
            //     include "view/taikhoan/dangki.php";
            //     break;
        case "dangnhap":
            if (isset($_POST["login"])) {
                $username = $_POST['username'];
                $password = $_POST['pass'];
                $nguoidung = check_taikhoan($username, $password);
                // var_dump($nguoidung, $username, $password);
                // die();
                extract($nguoidung);
                if ($quyenhan == 1) {
                    // if (is_array($check_tk)) {
                    $_SESSION['user'] = $nguoidung;
                    header('location: index.php');
                    $_SESSION['thongbao'] = "";
                    include "home.php";
                } elseif ($quyenhan == 0) {
                    $_SESSION['user'] = $nguoidung;
                    header('location: ../../view/index.php');
                    $_SESSION['thongbao'] = "";
                    include "home.php";
                } else {
                    session_start();
                    $_SESSION['thongbao'] = "Sai tài khoản hoặc mật khẩu";
                    header('location: User/login.php');
                }
            }

            break;
        case 'logout':

            // ob_clean();

            header("Location: ./User/login.php");

            exit;
            break;


        case 'login':
            include "User/logout.php";

            break;
        case 'forgotpass':
            header("Location: ./User/quenmatkhau.php");

            exit;
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
