<?php
// function insert_spbienthe($idnsx, $idpl, $idud, $tensp, $giasp, $soluongtk, $hinh, $mota)
// {
//     $sql = "insert into spbienthe(idnsx,idpl,idud,tensp,giasp,soluongtk,hinh,mota) values('$idnsx', '$idpl', '$idud', '$tensp', '$giasp', '$soluongtk', '$hinh', '$mota')";
//     pdo_execute($sql);
// }
function insert_spbienthe($idmsp, $idbnsp, $idsp, $gia, $soluong, $hinh)
{
    $sql = "INSERT INTO spbienthe( idmsp, idbnsp, idsp, gia, soluong, hinh) VALUES ( :idmsp, :idbnsp, :idsp, :gia, :soluong, :hinh) ";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':idmsp', $idmsp);
    $stmt->bindParam(':idbnsp', $idbnsp);
    $stmt->bindParam(':idsp', $idsp);

    $stmt->bindParam(':gia', $gia);
    $stmt->bindParam(':soluong', $soluong);
    $stmt->bindParam(':hinh', $hinh);
    $stmt->execute();
}

function delete_spbienthe($id)
{
    $sql = "delete from spbienthe where idspbt=" . $id;
    pdo_execute($sql);
}
function loadall_spbienthe()
{
    $sql = "select * from spbienthe where 1";
    // if ($kyw != "") {
    //     $sql .= " and tensp like '%" . $kyw . "%'";
    // }
    // if ($iddm > 0) {
    //     $sql .= " and idnsx ='" . $iddm . "'";
    // }
    $sql .= " order by idsp desc";
    $listspbienthe = pdo_query($sql);
    return $listspbienthe;
}
function tenmsp($idmsp)
{
    $sql = "  SELECT m.tenmausp
FROM spbienthe sb
INNER JOIN mausanpham m ON sb.idmsp = m.idmsp
WHERE sb.idmsp = '$idmsp'";
    return pdo_query_value($sql);
}
function tenbnsp($idbnsp)
{
    $sql = "  SELECT m.kichthuoc
FROM spbienthe sb
INNER JOIN bonhosp m ON sb.idbnsp = m.idbnsp
WHERE sb.idbnsp = '$idbnsp'";
    return pdo_query_value($sql);
}
// function loadall_phanloai()
// {
//     $sql = "select * from phanloai order by idpl desc";
//     $listpl = pdo_query($sql);
//     return $listpl;
// }
// function loadall_ud()
// {
//     $sql = "select * from uudai order by idud desc";
//     $listpl = pdo_query($sql);
//     return $listpl;
// }



// function loadall_spbienthe_home()
// {
//     $sql = "select * from spbienthe where 1 order by id desc limit 0,9";


//     $listspbienthe = pdo_query($sql);
//     return $listspbienthe;
// }
// function loadall_spbienthe_top()
// {
//     $sql = "select * from spbienthe where 1 order by luotxem desc limit 0,7";


//     $listspbienthe = pdo_query($sql);
//     return $listspbienthe;
// }
function loadone_spbienthe($id)
{
    $sql = "select * from spbienthe where idspbt=" . $id;
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
// function load_spbienthe_cungloai($id, $iddm)
// {
//     $sql = "select *from spbienthe where iddm=$iddm and id<>" . $id;
//     $listspbienthe = pdo_query($sql);
//     return $listspbienthe;
// }
function update_spbienthe($idspbt, $idmsp, $idbnsp, $idsp, $gia, $soluong, $hinh)
{
    if ($hinh == "") {
        $sql = "update spbienthe set idmsp='" . $idmsp . "',idsp='" . $idsp . "',
        idbnsp='" . $idbnsp . "',gia='" . $gia . "',soluong='" . $soluong . "' where idspbt=" . $idspbt;
    } else {
        $sql = "update spbienthe set idmsp='" . $idmsp . "',idsp='" . $idsp . "',hinh='" . $hinh . "',
        idbnsp='" . $idbnsp . "',gia='" . $gia . "',soluong='" . $soluong . "' where idspbt=" . $idspbt;
    }

    pdo_execute($sql);
}
function showidspbtMax()
{
    $sql = "SELECT idspbt FROM spbienthe ORDER BY idspbt DESC LIMIT 1";
    return pdo_query_value($sql);
}
