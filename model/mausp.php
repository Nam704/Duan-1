<?php
function insert_mausanpham($tenmausp)
{
    $sql = "insert into mausanpham(tenmausp) values('$tenmausp')";
    pdo_execute($sql);
}
function delete_mausanpham($id)
{
    $sql = "delete from mausanpham where idmsp=" . $id;
    pdo_query($sql);
}
function loadall_mausanpham()
{
    $sql = "select * from mausanpham order by idmsp desc";
    $listmsp = pdo_query($sql);
    return $listmsp;
}
function loadone_mausanpham($id)
{
    $sql = "select *from mausanpham where idmsp=" . $id;
    $msp = pdo_query_one($sql);
    return $msp;
}
function update_mausanpham($id, $tenmausp)
{
    $sql = "update mausanpham set tenmausp='" . $tenmausp . "' where idmsp=" . $id;
    pdo_execute($sql);
}
function showIDmspMax()
{
    $sql = "SELECT idmsp FROM mausanpham ORDER BY idmsp DESC LIMIT 1";
    return pdo_query_value($sql);
}
