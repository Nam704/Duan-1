<?php
function insert_bonhosp($kichthuoc)
{
    $sql = "insert into bonhosp(kichthuoc) values('$kichthuoc')";
    pdo_execute($sql);
}
function delete_bonhosp($id)
{
    $sql = "delete from bonhosp where idbnsp=" . $id;
    pdo_query($sql);
}
function loadall_bonhosp()
{
    $sql = "select * from bonhosp order by idbnsp desc";
    $listbnsp = pdo_query($sql);
    return $listbnsp;
}
function loadone_bonhosp($id)
{
    $sql = "select *from bonhosp where idbnsp=" . $id;
    $bnsp = pdo_query_one($sql);
    return $bnsp;
}
function update_bonhosp($id, $kichthuoc)
{
    $sql = "update bonhosp set kichthuoc='" . $kichthuoc . "' where idbnsp=" . $id;
    pdo_execute($sql);
}
function showIDbnspMax()
{
    $sql = "SELECT idbnsp FROM bonhosp ORDER BY idbnsp DESC LIMIT 1";
    return pdo_query_value($sql);
}
