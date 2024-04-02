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
function taomadonhang($iddh, $iduser)
{
    return uniqid('MDH-', true) . $iddh . "_" . $iduser;
}
// function laytensp($id)
// {
//     $sql = "SELECT sp.tensp
//     FROM chitietdonhang ct
//     INNER JOIN sanpham sp ON ct.idsp = sp.idsp
//     WHERE ct.idsp = '$id'
//     ";
//     return pdo_query_value($sql);
// }
function laytensp($id)
{
    $sql = "SELECT sp.tensp
            FROM chitietdonhang ct
            INNER JOIN sanpham sp ON ct.idsp = sp.idsp
            WHERE ct.idsp = '$id'";
    $params = array(':id' => $id);
    $result = pdo_query_one($sql);

    if ($result) {
        return $result['tensp'];
    } else {
        return ""; // hoặc có thể trả về null hoặc một giá trị khác để biểu thị không có tên sản phẩm
    }
}
