<?php
function insert_nguoidung($tenuser, $password, $quyenhan, $email, $address, $sdt)
{
    $sql = "insert into nguoidung(tenuser,password,quyenhan,email,address,sdt) values('$tenuser','$password','$quyenhan','$email','$address','$sdt')";
    pdo_execute($sql);
}
function khoa_nguoidung($id)
{
    $sql = "update nguoidung set trangthai=1 where iduser=" . $id;
    pdo_execute($sql);
}
function mokhoa_nguoidung($id)
{
    $sql = "update nguoidung set trangthai=0 where iduser=" . $id;
    pdo_execute($sql);
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
function donhangfromnguoidung($iduser)
{
    $sql = "select * from donhang where iduser=" . $iduser;
    $listuser = pdo_query($sql);
    return $listuser;
}
// function update_nguoidung($id, $tenuser,$password,$quyenhan)
// {
//     $sql = "update nguoidung set tenuser='" . $tenuser . "' where iduser=" . $id;
//     pdo_execute($sql);
// }
function update_nguoidung($id, $tenuser, $password, $quyenhan, $email, $address, $sdt)
{
    // Sử dụng Prepared Statement để ngăn chặn SQL Injection
    $sql = "UPDATE nguoidung SET tenuser = ?, password = ?, quyenhan = ?, email = ?, address = ?, sdt = ? WHERE iduser = ?";

    // Chuẩn bị câu lệnh SQL
    $stmt = pdo_get_connection()->prepare($sql);

    // Bind các giá trị vào câu lệnh SQL
    $stmt->bindParam(1, $tenuser);
    $stmt->bindParam(2, $password);
    $stmt->bindParam(3, $quyenhan);
    $stmt->bindParam(4, $email);
    $stmt->bindParam(5, $address);
    $stmt->bindParam(6, $sdt);
    $stmt->bindParam(7, $id);

    // Thực thi câu lệnh SQL
    $stmt->execute();
    // pdo_execute($sql);
}
function tongsonguoidung()
{
    $sql = "SELECT COUNT(*) AS total_orders FROM nguoidung";
    return pdo_query_value($sql);
}
function showiduserMax()
{
    $sql = "SELECT iduser FROM nguoidung ORDER BY iduser DESC LIMIT 1";
    return pdo_query_value($sql);
}
function check_taikhoan($username, $password)
{
    $sql = "select * from nguoidung where tenuser='" . $username . "' and password='" . $password . "'";
    $sp = pdo_query_one($sql);
    return $sp;
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
function quyenhan($quyenhan)
{
    if ($quyenhan == 1) {
        return "Quản Lý";
    } else {
        return "Người dùng";
    }
}
function trangthai($quyenhan)
{
    if ($quyenhan == 1) {
        return "Đã khóa";
    } else {
        return "Bình thường";
    }
}
