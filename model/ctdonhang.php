<?php



function selectctdh($id)
{
    $sql = "SELECT *
FROM chitietdonhang
WHERE iddh = $id;
";
    $listadmin = pdo_query($sql);
    return $listadmin;
}
function laygiasp($id)
{
    $sql = "SELECT sp.giasp
    FROM chitietdonhang ct
    INNER JOIN sanpham sp ON ct.idsp = sp.idsp
    WHERE ct.idsp = '$id'
    ";
    return pdo_query_value($sql);
}
