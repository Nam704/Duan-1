<?php
function insert_khachhang($iduser, $tenkh, $email, $address, $sdt)
{
    $sql = "insert into khachhang(iduser,tenkh,email,address,sdt) values('$iduser','$tenkh','$email','$address','$sdt')";
    pdo_execute($sql);
}
function delete_khachhang($id)
{
    $sql = "delete from khachhang where idkh=" . $id;
    pdo_query($sql);
}
function loadall_khachhang()
{
    $sql = "select * from khachhang order by idkh desc";
    $listkh = pdo_query($sql);
    return $listkh;
}
// function loadone_khachhang($id)
// {
//     $sql = "select *from khachhang where idqtv=" . $id;
//     $user = pdo_query_one($sql);
//     return $user;
// }
// function update_khachhang($id, $tenkh,$password,$quyenhan)
// {
//     $sql = "update khachhang set tenkh='" . $tenkh . "' where idqtv=" . $id;
//     pdo_execute($sql);
// }
// function update_khachhang($id, $tenkh, $password, $quyenhan)
// {
//     // Sử dụng Prepared Statement để ngăn chặn SQL Injection
//     $sql = "UPDATE khachhang SET tenkh = ?, password = ?, quyenhan = ? WHERE idqtv = ?";

//     // Chuẩn bị câu lệnh SQL
//     $stmt = pdo_get_connection()->prepare($sql);

//     // Bind các giá trị vào câu lệnh SQL
//     $stmt->bindParam(1, $tenkh);
//     $stmt->bindParam(2, $password);
//     $stmt->bindParam(3, $quyenhan);
//     $stmt->bindParam(4, $id);

//     // Thực thi câu lệnh SQL
//     $stmt->execute();
// }
function showidkhMax()
{
    $sql = "SELECT idkh FROM khachhang ORDER BY idkh DESC LIMIT 1";
    return pdo_query_value($sql);
}
