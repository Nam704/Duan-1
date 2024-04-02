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
$listsp = loadall_sanpham_dangban();



include "header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

            // controller nhasanxuat
        case "listnsx":

            $listnsx = loadall_nhasanxuat();
            include "./nhasanxuat/listnhasx.php";
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
    include "home.php";
}
include "footer.php";
