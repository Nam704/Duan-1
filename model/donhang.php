<?php
// function insert_donhang($idnsx, $idpl, $idud, $tensp, $giasp, $soluongtk, $hinh, $mota)
// {
//     $sql = "insert into donhang(idnsx,idpl,idud,tensp,giasp,soluongtk,hinh,mota) values('$idnsx', '$idpl', '$idud', '$tensp', '$giasp', '$soluongtk', '$hinh', '$mota')";
//     pdo_execute($sql);
// }
// function insert_donhang($idnsx, $idpl, $idud, $tensp, $giasp, $soluongtk, $hinh, $mota)
// {
//     $sql = "INSERT INTO donhang( idnsx, idpl, idud, tensp, giasp, soluongtk, hinh, mota) VALUES ( :idnsx, :idpl, :idud, :tensp, :giasp, :soluongtk, :hinh, :mota) ";
//     $conn = pdo_get_connection();
//     $stmt = $conn->prepare($sql);

//     $stmt->bindParam(':idnsx', $idnsx);
//     $stmt->bindParam(':idpl', $idpl);
//     $stmt->bindParam(':idud', $idud);
//     $stmt->bindParam(':tensp', $tensp);
//     $stmt->bindParam(':giasp', $giasp);
//     $stmt->bindParam(':soluongtk', $soluongtk);
//     $stmt->bindParam(':hinh', $hinh);
//     $stmt->bindParam(':mota', $mota);
//     $stmt->execute();
// }

function delete_donhang($id)
{
    $sql = "delete from donhang where iddh=" . $id;
    pdo_execute($sql);
}
function loadall_donhang()
{
    $sql = "select * from donhang where 1";

    $sql .= " order by iddh desc";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}
function tenkhach($iduser)
{
    $sql = "select tenuser from nguoidung where iduser=$iduser";
    return pdo_query_value($sql);
}
function tenkh($idkh)
{
    $sql = "  SELECT m.tenuser
FROM donhang sb
INNER JOIN nguoidung m ON sb.iduser = m.iduser
WHERE sb.iduser = '$idkh'";
    return pdo_query_value($sql);
}
function trangthaiDH($trangthai)
{
    if ($trangthai == 1) {
        return "Chờ xác nhận";
    } elseif ($trangthai == 2) {
        return "Đã xác nhận";
    } elseif ($trangthai == 3) {
        return "Đang chuẩn bị hàng";
    } elseif ($trangthai == 4) {
        return "Đã giao cho đơn vị vận chuyển";
    } elseif ($trangthai == 5) {
        return "Đang trên đường đến khách";
    } elseif ($trangthai == 6) {
        return "Giao thành công";
    } elseif ($trangthai == 7) {
        return "Đơn hủy do khách";
    } elseif ($trangthai == 8) {
        return "Khách hoàn đơn";
    } elseif ($trangthai == 9) {
        return "Đơn hủy do người bán";
    } elseif ($trangthai == 10) {
        return "Đơn hoàn được chấp nhận";
    } elseif ($trangthai == 11) {
        return "Đơn hoàn bị từ chối";
    } elseif ($trangthai == 12) {
        return "Đơn hủy được chấp nhận";
    }
}
function load_alltrangthaidon()
{
    $sql = "select distinct idth from trangthaidonhang";
    $listtrangthai = pdo_query($sql);
    return $listtrangthai;
}
function listDHtheotrangthai($trangthai)
{

    $sql = "select * from donhang where trangthai=$trangthai";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}
function PTthanhtoan($thanhtoan)
{
    if ($thanhtoan == 0) {
        return "Giao tiền khi nhận hàng";
    } elseif ($thanhtoan == 1) {
        return "thanh toán online";
    }
}
function tongtientuCTDH($id)
{
    $sql = "SELECT tonggia
FROM chitietdonhang
WHERE iddh = $id;
";
    $listadmin = pdo_query($sql);
    $tongtien = 0;
    foreach ($listadmin as $key) {
        $tongtien += $key["tonggia"];
    }
    return $tongtien;
}
function capnhattonggiaDH($iddh, $tonggia)
{
    $sql = "update donhang set tonggia=$tonggia where iddh=" . $iddh;
    return pdo_execute($sql);
}
function tongtienallDH()
{
    $sql = "SELECT SUM(tonggia) AS total_revenue FROM donhang";
    return pdo_query_value($sql);
}
function chapnhan($iddh)
{
    $sql = "update donhang set trangthai=2 where iddh=" . $iddh;
    return pdo_execute($sql);
}
function tuchoi($iddh)
{
    $sql = "update donhang set trangthai=9 where iddh=" . $iddh;
    return pdo_execute($sql);
}
function capnhattranthai($iddh, $trangthai)
{
    $sql = "update donhang set trangthai=$trangthai where iddh=" . $iddh;
    return pdo_execute($sql);
}
function ctdonmuangay($iduser, $idspbt, $giasp, $soluong, $tonggia)
{
    $sanphammuangay = ["iduser" => $iduser, "idspbt" => $idspbt, "giasp" => $giasp, "soluong" => $soluong, "tonggia" => $tonggia,];
    return $sanphammuangay;
}
function donhangmuangay($iduser, $ngaydh, $trangthai, $diachigh, $sdt, $ptthanhtoan, $tonggia)
{

    $donhang = ["iduser" => $iduser, "ngaydh" => $ngaydh, "trangthai" => $trangthai, "diachigh" => $diachigh, "sdt" => $sdt, "ptthanhtoan" => $ptthanhtoan, "tonggia" => $tonggia];
    return $donhang;
}
function ctdonhangmuangay($idsp, $idspbt, $giasp, $soluong, $tonggia)
{
    $ctdonhang = ["idsp" => $idsp, "idspbt" => $idspbt, "giasp" => $giasp, "soluong" => $soluong, "tonggia" => $tonggia];
    return $ctdonhang;
}
// function loadall_donhang_home()
// {
//     $sql = "select * from donhang where 1 order by id desc limit 0,9";


//     $listdonhang = pdo_query($sql);
//     return $listdonhang;
// }
// function loadall_donhang_top()
// {
//     $sql = "select * from donhang where 1 order by luotxem desc limit 0,7";


//     $listdonhang = pdo_query($sql);
//     return $listdonhang;
// }
function loadone_donhang($id)
{
    $sql = "select * from donhang where iddh=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function tongsodonhang()
{
    $sql = "SELECT COUNT(*) AS total_orders FROM donhang";
    return pdo_query_value($sql);
}
// function load_tendm($iddm)
// {
//     if ($iddm > 0) {
//         $sql = "select * from danhmuc where id=" . $iddm;
//         $dm = pdo_query_one($sql);
//         extract($dm);
//         return $name;
//     } else {
//         return "";
//     }
// }
// function load_donhang_cungloai($id, $iddm)
// {
//     $sql = "select *from donhang where iddm=$iddm and id<>" . $id;
//     $listdonhang = pdo_query($sql);
//     return $listdonhang;
// }
// function update_donhang($idsp, $idnsx, $idpl, $idud, $tensp, $giasp, $soluongtk, $hinh, $mota)
// {
//     if ($hinh == "") {
//         $sql = "update donhang set tensp='" . $tensp . "',giasp='" . $giasp . "',
//         idnsx='" . $idnsx . "',idpl='" . $idpl . "',idud='" . $idud . "',
//         soluongtk='" . $soluongtk . "', mota='" . $mota . "' where idsp=" . $idsp;
//     } else {
//         $sql = "update donhang set tensp='" . $tensp . "',giasp='" . $giasp . "',
//         idnsx='" . $idnsx . "',idpl='" . $idpl . "',idud='" . $idud . "',
//         soluongtk='" . $soluongtk . "', mota='" . $mota . "', hinh='" . $hinh . "' where idsp=" . $idsp;
//     }

//     pdo_execute($sql);
// }
// function showidspMax()
// {
//     $sql = "SELECT idsp FROM donhang ORDER BY idsp DESC LIMIT 1";
//     return pdo_query_value($sql);
// }