<?php
function insert_sanpham($idnsx, $idpl, $idud, $tensp, $giasp, $soluongtk, $hinh, $mota)
{
    $sql = "insert into sanpham(idnsx,idpl,idud,tensp,giasp,soluongtk,hinh,mota) values('$idnsx', '$idpl', '$idud', '$tensp', '$giasp', '$soluongtk', '$hinh', '$mota')";
    pdo_execute($sql);
}
// function insert_sanpham($idnsx, $idpl, $idud, $tensp, $giasp, $soluongtk, $hinh, $mota)
// {
//     $sql = "INSERT INTO sanpham( idnsx, idpl, idud, tensp, giasp, soluongtk, hinh, mota) VALUES ( :idnsx, :idpl, :idud, :tensp, :giasp, :soluongtk, :hinh, :mota) ";
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

function delete_sanpham($id)
{
    $sql = "delete from sanpham where idsp=" . $id;
    pdo_execute($sql);
}
function loadall_sanpham($kyw, $iddm)
{
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and tensp like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and idnsx ='" . $iddm . "'";
    }
    $sql .= " order by idsp desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_phanloai()
{
    $sql = "select * from phanloai order by idpl desc";
    $listpl = pdo_query($sql);
    return $listpl;
}
function loadall_ud()
{
    $sql = "select * from uudai order by idud desc";
    $listpl = pdo_query($sql);
    return $listpl;
}


// function loadall_sanpham_home()
// {
//     $sql = "select * from sanpham where 1 order by id desc limit 0,9";


//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }
// function loadall_sanpham_top()
// {
//     $sql = "select * from sanpham where 1 order by luotxem desc limit 0,7";


//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }
function loadone_sanpham($id)
{
    $sql = "select * from sanpham where idsp=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
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
// function load_sanpham_cungloai($id, $iddm)
// {
//     $sql = "select *from sanpham where iddm=$iddm and id<>" . $id;
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }
function update_sanpham($idsp, $idnsx, $idpl, $idud, $tensp, $giasp, $soluongtk, $hinh, $mota)
{
    if ($hinh == "") {
        $sql = "update sanpham set tensp='" . $tensp . "',giasp='" . $giasp . "',
        idnsx='" . $idnsx . "',idpl='" . $idpl . "',idud='" . $idud . "',
        soluongtk='" . $soluongtk . "', mota='" . $mota . "' where idsp=" . $idsp;
    } else {
        $sql = "update sanpham set tensp='" . $tensp . "',giasp='" . $giasp . "',
        idnsx='" . $idnsx . "',idpl='" . $idpl . "',idud='" . $idud . "',
        soluongtk='" . $soluongtk . "', mota='" . $mota . "', hinh='" . $hinh . "' where idsp=" . $idsp;
    }

    pdo_execute($sql);
}
function showidspMax()
{
    $sql = "SELECT idsp FROM sanpham ORDER BY idsp DESC LIMIT 1";
    return pdo_query_value($sql);
}
function tennsx($idnsx)
{
    $sql = "  SELECT m.tennsx
FROM sanpham sb
INNER JOIN nhasanxuat m ON sb.idnsx = m.idnsx
WHERE sb.idnsx = '$idnsx'";
    return pdo_query_value($sql);
}
function khoa_sp($id)
{
    $sql = "update sanpham set trangthai=1 where idsp=" . $id;
    pdo_execute($sql);
}
function mokhoa_sp($id)
{
    $sql = "update sanpham set trangthai=0 where idsp=" . $id;
    pdo_execute($sql);
}