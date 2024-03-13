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
            include "./listnhasx.php";
            break;
    }
} else
    include "home.php";
