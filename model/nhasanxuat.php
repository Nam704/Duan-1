<?php
function insert_nhasanxuat($tennsx)
{
    $sql = "insert into nhasanxuat(tennsx) values('$tennsx')";
    pdo_execute($sql);
}
function delete_nhasanxuat($id)
{
    $sql = "delete from nhasanxuat where idnsx=" . $id;
    pdo_query($sql);
}
function loadall_nhasanxuat()
{
    $sql = "select * from nhasanxuat order by idnsx desc";
    $listnsx = pdo_query($sql);
    return $listnsx;
}
function loadone_nhasanxuat($id)
{
    $sql = "select *from nhasanxuat where idnsx=" . $id;
    $nsx = pdo_query_one($sql);
    return $nsx;
}
function updatensx($id, $tennsx)
{
    $sql = "update nhasanxuat set tennsx='" . $tennsx . "' where idnsx=" . $id;
    pdo_execute($sql);
}
function showIDnsxMax()
{
    $sql = "SELECT idnsx FROM nhasanxuat ORDER BY idnsx DESC LIMIT 1";
    return pdo_query_value($sql);
}
