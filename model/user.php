<?php
function insert_nguoidung($tenuser)
{
    $sql = "insert into nguoidung(tenuser) values('$tenuser')";
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
function update_nguoidung($id, $tenuser)
{
    $sql = "update nguoidung set tenuser='" . $tenuser . "' where iduser=" . $id;
    pdo_execute($sql);
}
function showiduserMax()
{
    $sql = "SELECT iduser FROM nguoidung ORDER BY iduser DESC LIMIT 1";
    return pdo_query_value($sql);
}
