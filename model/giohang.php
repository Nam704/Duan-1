<?php
function insert_giohang($iduser)
{
    $sql = "insert into giohang(iduser) values('$iduser')";
    pdo_execute($sql);
}
// function delete_nhasanxuat($id)
// {
//     $sql = "delete from nhasanxuat where idnsx=" . $id;
//     pdo_query($sql);
// }
// function loadall_nhasanxuat()
// {
//     $sql = "select * from nhasanxuat order by idnsx desc";
//     $listnsx = pdo_query($sql);
//     return $listnsx;
// }
function check_giohang($iduser)
{
    $sql = "SELECT COUNT(*) AS user_count
    FROM giohang
    WHERE iduser = $iduser";

    $result = pdo_query_value($sql);
    return $result;
}
function return_IDgh($iduser)
{
    $sql = "select idgh from giohang where iduser=$iduser";
    $idgh = pdo_query_value($sql);
    return $idgh;
}
function loadone_giohang($id)
{
    $sql = "select *from giohang where iduser=" . $id;
    $nsx = pdo_query_one($sql);
    return $nsx;
}
function themSPvaoGH($idspbt, $iduser, $idgh, $soluong, $giasp, $idsp)
{
    $sql = "insert into chitietgiohang(idspbt,iduser,idgh,soluong,giasp,idsp) 
    values($idspbt,$iduser,$idgh,$soluong,$giasp,$idsp)";
    return pdo_execute($sql);
}
function updateSlspbt($idspbt, $soluong)
{
    $sql = "update spbienthe set soluong=" . $soluong . " where idspbt=" . $idspbt;
    pdo_execute($sql);
}
function load_allsptronggiohang($id)
{
    $sql = "SELECT *
FROM chitietgiohang
WHERE idgh = $id;
";
    $listadmin = pdo_query($sql);
    return $listadmin;
}
// function updatensx($id, $tennsx)
// {
//     $sql = "update nhasanxuat set tennsx='" . $tennsx . "' where idnsx=" . $id;
//     pdo_execute($sql);
// }
// function showIDnsxMax()
// {
//     $sql = "SELECT idnsx FROM nhasanxuat ORDER BY idnsx DESC LIMIT 1";
//     return pdo_query_value($sql);
// }
// function khoa_nsx($id)
// {
//     $sql = "update nhasanxuat set trangthai=1 where idnsx=" . $id;
//     pdo_execute($sql);
// }
// function mokhoa_nsx($id)
// {
//     $sql = "update nhasanxuat set trangthai=0 where idnsx=" . $id;
//     pdo_execute($sql);
// }