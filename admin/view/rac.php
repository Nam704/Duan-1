<?php
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
include "../../../../Duan1/Duan-1/model/ctdonhang.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ComboBox with Links</title>
</head>

<body>

    <!-- ComboBox -->
    <form action="rac.php?act=trangthai<?= $trangthai ?>" method="post">
        <select name="trangthai">
            <option value="1">Page 1</option>
            <option value="2">Page 2</option>
            <option value="3">Page 3</option>
        </select>
        <input type="submit" value="Go">
    </form>

</body>

</html>
<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $selectedPage = $_POST['listdh'];
if (isset($_POST['trangthai'])) {
    $trangthai = $_POST['trangthai'];
    $listdh = listDHtheotrangthai($trangthai);
}


include "./donhang/listdonhang.php";
// break;
// header("Location: $selectedPage");
// exit();
// }
?>
hộp thoại <select name="" id=""></select>
<?php
// if ($_GET["act"] != "DSdonhangfromuser") {
//     $DStrangthaidon = load_alltrangthaidon();
//     $dem = 0;

//     foreach ($DStrangthaidon as $ttdonhang) {
//         extract($ttdonhang);
//         $tenth = trangthaiDH($idth);
//         if ($ttdonhang["idth"] == $_GET["trangthai"]) {
//             $noibat = 'background-color: rgb(180, 180, 227)!important;color: white';
//         } else {
//             $noibat = '';
//         }
// ++$dem;
// if ($dem == 7) {
//     # code...
//     echo '</tr><tr>';
// }
// echo '
//    <td>
//         <a href="./index.php?act=listdh&trangthai=' . $ttdonhang["idth"] . '">
//             <input style="' . $noibat . '" class="btn btn-soft-primary w-100" type="button" value="' . $tenth . '">
//         </a>
//     </td>
//    ';
//         echo '
//             <option value="">
//             <a style="' . $noibat . '" href="./index.php?act=listdh&trangthai=' . $ttdonhang["idth"] . '">
//             ' . $tenth . '</a>
//             </option>';
//     }
// }


?>
<form action="index.php?act=listsp" method="post">
    <input type="text" name="kyw" style="width: 20%;float:left">
    <select name="idnsx" id="" style="float:left; width: 15%;margin-bottom: 10px;padding: 0.3% ;font-size: 17px;">
        <option class="btn btn-soft-primary" style="font-size: 17px;" value="0" selected>All</option>
        <?php
        foreach ($listnsx as $nsx) {
            extract($nsx);
            echo '<option class="btn btn-soft-primary" style="font-size: 17px;" value="' . $idnsx . '">' . $tennsx . '</option>';
        }

        ?>
    </select>

    <input type="submit" name="listok" value="Lọc" style="float: left; width:10%">
</form>