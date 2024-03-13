<?php
function insert_nhasanxuat($tennsx)
{
    $sql = "insert into nhasanxuat(tennsx) values('$tennsx')";
    pdo_execute($sql);
}
// function delete_danhmuc($id)
// {
//     $sql = "delete from danhmuc where id=" . $id;
//     pdo_query($sql);
// }
function loadall_nhasanxuat()
{
    $sql = "select * from nhasanxuat order by idnsx desc";
    $listnsx = pdo_query($sql);
    return $listnsx;
}
// function loadone_danhmuc($id)
// {
//     $sql = "select *from danhmuc where id=" . $id;
//     $dm = pdo_query_one($sql);
//     return $dm;
// }
// function updatedm($id, $tenloai)
// {
//     $sql = "update danhmuc set name='" . $tenloai . "' where id=" . $id;
//     pdo_execute($sql);
// }