<?php
function insert_nguoidung($tenuser, $password, $quyenhan)
{
    $sql = "insert into nguoidung(tenuser,password,quyenhan) values('$tenuser','$password','$quyenhan')";
    pdo_execute($sql);
}
function delete_nguoidung($id)
{
    $sql = "delete from nguoidung where iduser=" . $id;
    pdo_query($sql);
}
function loadall_nguoidung()
{
    $sql = "select * from nguoidung order by iduser desc";
    $listuser = pdo_query($sql);
    return $listuser;
}
function loadone_nguoidung($id)
{
    $sql = "select *from nguoidung where iduser=" . $id;
    $user = pdo_query_one($sql);
    return $user;
}
// function update_nguoidung($id, $tenuser,$password,$quyenhan)
// {
//     $sql = "update nguoidung set tenuser='" . $tenuser . "' where iduser=" . $id;
//     pdo_execute($sql);
// }
function update_nguoidung($id, $tenuser, $password, $quyenhan)
{
    // Sử dụng Prepared Statement để ngăn chặn SQL Injection
    $sql = "UPDATE nguoidung SET tenuser = ?, password = ?, quyenhan = ? WHERE iduser = ?";

    // Chuẩn bị câu lệnh SQL
    $stmt = pdo_get_connection()->prepare($sql);

    // Bind các giá trị vào câu lệnh SQL
    $stmt->bindParam(1, $tenuser);
    $stmt->bindParam(2, $password);
    $stmt->bindParam(3, $quyenhan);
    $stmt->bindParam(4, $id);

    // Thực thi câu lệnh SQL
    // $stmt->execute();
    pdo_execute($sql);
}
function showiduserMax()
{
    $sql = "SELECT iduser FROM nguoidung ORDER BY iduser DESC LIMIT 1";
    return pdo_query_value($sql);
}
function selectAdmins()
{
    $sql = "SELECT *
    FROM nguoidung
    WHERE quyenhan = 1;
    ";
    $listadmin = pdo_query($sql);
    return $listadmin;
}
function selectKH()
{
    $sql = "SELECT *
    FROM nguoidung
    WHERE quyenhan = 0;
    ";
    $listadmin = pdo_query($sql);
    return $listadmin;
}
