<?php
ob_start();

include "../../../../Duan1/Duan-1/model/pdo.php";
include "../../../../Duan1/Duan-1/model/nhasanxuat.php";
include "../../../../Duan1/Duan-1/model/bonhosp.php";
include "../../../../Duan1/Duan-1/model/mausp.php";
include "../../../../Duan1/Duan-1/model/user.php";



// loadall_nhasanxuat();
// var_dump(loadall_nhasanxuat());
// include "../Duan1/Duan-1/model/pdo.php";

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
                delete_nhasanxuat($_GET['id']);
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
                delete_bonhosp($_GET['id']);
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
                delete_mausanpham($_GET['id']);
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
            header("Location: index.php?act=listmsp");




            break;
            // controller User
        case 'listuser':
            $listuser = loadall_nguoidung();
            include "User/listuser.php";
            break;
        case "adduser":
            $listuser = loadall_nguoidung();
            $IDmax = showiduserMax();
            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $tenuser = $_POST["tenuser"];
                $password = $_POST["password"];
                $quyenhan = $_POST["quyenhan"];

                insert_nguoidung($tenuser, $password, $quyenhan);
                $IDmax = showiduserMax();
            }

            include "./User/adduser.php";

            break;
        case 'xoauser':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_nguoidung($_GET['id']);
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
        case "updateuser":
            $listuser = loadall_nguoidung();
            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $tenuser = $_POST["tenuser"];
                $iduser = $_POST["iduser"];
                $password = $_POST["password"];
                $quyenhan = $_POST["quyenhan"];
                update_nguoidung($iduser, $tenuser, $password, $quyenhan);
            }

            header("Location: index.php?act=listuser");
            // exit;
            // ob_end_flush();



            break;

            // controller Admin
        case 'listAdmin':
            $listqtv = loadall_quantrivien();
            include "./User/listAdmin.php";
            break;
            // case "adduser":
            //     $listuser = loadall_nguoidung();
            //     $IDmax = showiduserMax();
            //     if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
            //         $tenuser = $_POST["tenuser"];
            //         $password = $_POST["password"];
            //         $quyenhan = $_POST["quyenhan"];

            //         insert_nguoidung($tenuser, $password, $quyenhan);
            //         $IDmax = showiduserMax();
            //     }

            //     include "./User/adduser.php";

            //     break;
            // case 'xoauser':
            //     if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            //         delete_nguoidung($_GET['id']);
            //     }
            //     $listuser = loadall_nguoidung();
            //     include "./User/listuser.php";
            //     break;
            // case 'suauser':
            //     if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            //         $user = loadone_nguoidung($_GET['id']);
            //         extract($user);
            //         include "./User/suauser.php";
            //     }
            //     break;
            // case "updateuser":
            //     $listuser = loadall_nguoidung();
            //     if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
            //         $tenuser = $_POST["tenuser"];
            //         $iduser = $_POST["iduser"];
            //         $password = $_POST["password"];
            //         $quyenhan = $_POST["quyenhan"];
            //         update_nguoidung($iduser, $tenuser, $password, $quyenhan);
            //     }

            //     header("Location: index.php?act=listuser");
            //     // exit;
            //     // ob_end_flush();



            //     break;


            // thao tac tai khoan
        case 'login':

            ob_clean();

            header("Location: ./User/login.php");
            exit;
            break;

        case 'dangki':
            include "User/register.php";

            break;
        case 'logout':
            include "User/logout.php";

            break;
        case 'forgotpass':
            include "User/quenmatkhau.php";

            break;
    }
} else {
    include "home.php";
}
include "footer.php";
