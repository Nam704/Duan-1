<?php
// function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm)
// {
//     $sql = "insert into sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
//     pdo_execute($sql);
// }
// function delete_sanpham($id)
// {
//     $sql = "delete from sanpham where id=" . $id;
//     pdo_execute($sql);
// }
// function loadall_sanpham($kyw, $iddm)
// {
//     $sql = "select * from sanpham where 1";
//     if ($kyw != "") {
//         $sql .= " and name like '%" . $kyw . "%'";
//     }
//     if ($iddm > 0) {
//         $sql .= " and iddm ='" . $iddm . "'";
//     }
//     $sql .= " order by id desc";
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }
// function loadall_sanpham_home()
// {
//     $sql = "select * from sanpham where 1 order by id desc limit 0,9";


//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }
// function loadall_sanpham_top()
// {
//     $sql = "select * from sanpham where 1 order by luotxem desc limit 0,7";


//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }
// function loadone_sanpham($id)
// {
//     $sql = "select * from sanpham where id=" . $id;
//     $sp = pdo_query_one($sql);
//     return $sp;
// }
// function load_tendm($iddm)
// {
//     if ($iddm > 0) {
//         $sql = "select * from danhmuc where id=" . $iddm;
//         $dm = pdo_query_one($sql);
//         extract($dm);
//         return $name;
//     } else {
//         return "";
//     }
// }
// function load_sanpham_cungloai($id, $iddm)
// {
//     $sql = "select *from sanpham where iddm=$iddm and id<>" . $id;
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }
// function update_sanpham($tensp, $giasp, $filename, $mota, $id, $iddm)
// {
//     if ($filename == "") {
//         $sql = "update sanpham set name='" . $tensp . "',iddm='" . $iddm . "',price='" . $giasp . "', mota='" . $mota . "' where id=" . $id;
//     } else {
//         $sql = "update sanpham set name='" . $tensp . "',iddm='" . $iddm . "',price='" . $giasp . "', img='" . $filename . "', mota='" . $mota . "' where id=" . $id;
//     }

//     pdo_execute($sql);
// }