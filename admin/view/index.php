<?php
include "../../../../Duan1/Duan-1/model/pdo.php";
include "../../../../Duan1/Duan-1/model/nhasanxuat.php";
// loadall_nhasanxuat();
// var_dump(loadall_nhasanxuat());
// include "../Duan1/Duan-1/model/pdo.php";

include "header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
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
            include "./nhasanxuat/listnhasx.php";


            break;
    }
} else
    include "./home/home.php";
