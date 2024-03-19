<?php
function insert_quantrivien($iduser, $tenqtv, $email, $address, $sdt)
{
    $sql = "insert into quantrivien(iduser,tenqtv,email,address,sdt) values('$iduser','$tenqtv','$email','$address','$sdt')";
    pdo_execute($sql);
}
function delete_quantrivien($id)
{
    $sql = "delete from quantrivien where idqtv=" . $id;
    pdo_query($sql);
}
function loadall_quantrivien()
{
    $sql = "select * from quantrivien order by idqtv desc";
    $listqtv = pdo_query($sql);
    return $listqtv;
}
function loadone_quantrivien($id)
{
    $sql = "select *from quantrivien where idqtv=" . $id;
    $user = pdo_query_one($sql);
    return $user;
}
// function update_quantrivien($id, $tenqtv,$password,$quyenhan)
// {
//     $sql = "update quantrivien set tenqtv='" . $tenqtv . "' where idqtv=" . $id;
//     pdo_execute($sql);
// }
function update_quantrivien($iduser, $idqtv, $tenqtv, $email, $address, $sdt)
{
    // Sử dụng Prepared Statement để ngăn chặn SQL Injection
    $sql = "UPDATE quantrivien SET tenqtv = ?, email = ?, address = ?, sdt = ?, iduser = ? WHERE idqtv = ?";

    // Chuẩn bị câu lệnh SQL
    $stmt = pdo_get_connection()->prepare($sql);

    // Bind các giá trị vào câu lệnh SQL
    $stmt->bindParam(1, $tenqtv);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $address);
    $stmt->bindParam(4, $sdt);
    $stmt->bindParam(5, $iduser);

    $stmt->bindParam(6, $idqtv);


    // Thực thi câu lệnh SQL
    $stmt->execute();
}
function showidqtvMax()
{
    $sql = "SELECT idqtv FROM quantrivien ORDER BY idqtv DESC LIMIT 1";
    return pdo_query_value($sql);
}
